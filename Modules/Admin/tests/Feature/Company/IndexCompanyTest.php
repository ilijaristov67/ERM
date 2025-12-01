<?php

use Modules\Admin\Database\Seeders\Permission\PermissionSeeder;
use Modules\Admin\Models\Company\Company;
use Modules\Admin\Models\User\User;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'admin-companies-read';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->routeName = 'api.admin.companies.index';

    $this->page = 1;
    $this->limit = 15;
    $this->numberToSeed = 15;

    $this->companies = Company::factory()->count($this->numberToSeed)->create();
});

it('successfully lists companies', function () {
    $response = $this->getJson(route($this->routeName));

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'page',
            'limit',
            'total_records',
            'total_pages',
            'filter',
            'sort',
            'data',
        ])
        ->and($response->json('data'))
        ->toBeArray()
        ->toHaveCount($this->numberToSeed)
        ->and($response->json('data')[0])
        ->toHaveKeys([
            'id',
            'name',
            'email',
            'phone',
            'created_at',
            'updated_at',
        ]);
});

it('successfully lists companies with pagination', function () {
    $response = $this->getJson(route($this->routeName), [
        'page' => $this->page,
        'limit' => $this->limit,
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json())
        ->toHaveKeys(['page', 'limit', 'total_records', 'total_pages', 'filter', 'data'])
        ->and($response->json()['page'])->toBe($this->page)
        ->and($response->json()['limit'])->toBe($this->limit)
        ->and($response->json()['filter'])->toBe('')
        ->and($response->json()['total_records'])->toBe($this->numberToSeed)
        ->and($response->json()['total_pages'])->toBe((int) ceil($this->numberToSeed / $response->json()['limit']));
});

it('successfully lists companies with id', function () {
    $company = Company::query()->first();

    $response = $this->getJson(route($this->routeName, [
        'filter' => [
            'id' => $company->id,
            'name' => $company->name,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('page'))->toBe(1)
        ->and($response->json('limit'))->toBe(15)
        ->and($response->json('total_pages'))->toBe(1)
        ->and($response->json()['data'])->toBeArray()
        ->and($response->json()['data'][0]['id'])->toBe($company->id)
        ->and($response->json()['data'][0]['name'])->toBe($company->name)
        ->and($response->json('filter'))->toHaveKeys([
            'id',
            'name',
        ])
        ->and($response->json('filter.id'))->toBe((string) $company->id)
        ->and($response->json('filter.name'))->toBe($company->name);
});

it('fails if company id doesnt exist', function () {
    $response = $this->getJson(route($this->routeName, [
        'filter' => [
            'id' => 99999,
        ],
    ]));

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('invalid')
        ->and($response->json('errors'))->toHaveKey('filter.id')
        ->and($response->json('errors')['filter.id'][0])
        ->toContain('invalid');
});

it('returns empty array if filter name doesnt exist', function () {
    $response = $this->getJson(route($this->routeName, [
        'filter' => [
            'name' => 'name that does not exist',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json('data'))->toBeEmpty();
});
