<?php

use Modules\Admin\Database\Seeders\Permission\PermissionSeeder;
use Modules\Admin\Models\Country\Country;
use Modules\Admin\Models\User\User;
use Tymon\JWTAuth\Facades\JWTAuth;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'admin-countries-read';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.admin.countries.index';

    $this->page = 1;
    $this->limit = 15;
    $this->numberToSeed = 10;

    Country::factory()->count($this->numberToSeed)->create();
});

it('successfully lists countries', function () {
    $response = $this->getJson(route($this->route));

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
        ->and($response->json('total_records'))->toBe($this->numberToSeed)
        ->and($response->json('data'))
        ->toBeArray()
        ->and($response->json('data')[0])
        ->toHaveKeys([
            'id',
            'name',
            'iso_alpha_2',
            'iso_alpha_3',
            'numeric_code',
            'created_at',
            'updated_at',
        ]);
});

it('successfully lists countries with pagination', function () {
    $response = $this->getJson(route($this->route), [
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

it('successfully lists countries with id filter', function () {
    $country = Country::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'id' => $country->id,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('page'))->toBe(1)
        ->and($response->json('limit'))->toBe(15)
        ->and($response->json('total_pages'))->toBe(1)
        ->and($response->json()['data'])->toBeArray()
        ->and($response->json()['data'][0]['id'])->toBe($country->id)
        ->and($response->json()['data'][0]['name'])->toBe($country->name)
        ->and($response->json('filter'))->toHaveKey('id')
        ->and($response->json('filter.id'))->toBe((string) $country->id);
});

it('successfully lists countries with name filter', function () {
    $country = Country::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'name' => $country->name,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('page'))->toBe(1)
        ->and($response->json('limit'))->toBe(15)
        ->and($response->json('total_pages'))->toBe(1)
        ->and($response->json()['data'])->toBeArray()
        ->and($response->json()['data'][0]['id'])->toBe($country->id)
        ->and($response->json()['data'][0]['name'])->toBe($country->name)
        ->and($response->json('filter'))->toHaveKey('name')
        ->and($response->json('filter.name'))->toBe($country->name);
});

it('successfully lists countries with iso_alpha_2 filter', function () {
    $country = Country::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'iso_alpha_2' => $country->iso_alpha_2,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('page'))->toBe(1)
        ->and($response->json('limit'))->toBe(15)
        ->and($response->json('total_pages'))->toBe(1)
        ->and($response->json()['data'])->toBeArray()
        ->and($response->json()['data'][0]['id'])->toBe($country->id)
        ->and($response->json()['data'][0]['iso_alpha_2'])->toBe($country->iso_alpha_2)
        ->and($response->json('filter'))->toHaveKey('iso_alpha_2')
        ->and($response->json('filter.iso_alpha_2'))->toBe($country->iso_alpha_2);
});

it('successfully lists countries with iso_alpha_3 filter', function () {
    $country = Country::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'iso_alpha_3' => $country->iso_alpha_3,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('page'))->toBe(1)
        ->and($response->json('limit'))->toBe(15)
        ->and($response->json('total_pages'))->toBe(1)
        ->and($response->json()['data'])->toBeArray()
        ->and($response->json()['data'][0]['id'])->toBe($country->id)
        ->and($response->json()['data'][0]['iso_alpha_3'])->toBe($country->iso_alpha_3)
        ->and($response->json('filter'))->toHaveKey('iso_alpha_3')
        ->and($response->json('filter.iso_alpha_3'))->toBe($country->iso_alpha_3);
});

it('successfully lists countries with numeric_code filter', function () {
    $country = Country::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'numeric_code' => $country->numeric_code,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('page'))->toBe(1)
        ->and($response->json('limit'))->toBe(15)
        ->and($response->json('total_pages'))->toBe(1)
        ->and($response->json()['data'])->toBeArray()
        ->and($response->json()['data'][0]['id'])->toBe($country->id)
        ->and($response->json()['data'][0]['numeric_code'])->toBe($country->numeric_code)
        ->and($response->json('filter'))->toHaveKey('numeric_code')
        ->and($response->json('filter.numeric_code'))->toBe((string) $country->numeric_code);
});

it('successfully lists countries with multiple filters', function () {
    $country = Country::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'id' => $country->id,
            'name' => $country->name,
            'iso_alpha_2' => $country->iso_alpha_2,
            'iso_alpha_3' => $country->iso_alpha_3,
            'numeric_code' => $country->numeric_code,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('page'))->toBe(1)
        ->and($response->json('limit'))->toBe(15)
        ->and($response->json('total_pages'))->toBe(1)
        ->and($response->json()['data'])->toBeArray()
        ->and($response->json()['data'][0]['id'])->toBe($country->id)
        ->and($response->json()['data'][0]['name'])->toBe($country->name)
        ->and($response->json()['data'][0]['iso_alpha_2'])->toBe($country->iso_alpha_2)
        ->and($response->json()['data'][0]['iso_alpha_3'])->toBe($country->iso_alpha_3)
        ->and($response->json()['data'][0]['numeric_code'])->toBe($country->numeric_code)
        ->and($response->json('filter'))->toHaveKeys([
            'id',
            'name',
            'iso_alpha_2',
            'iso_alpha_3',
            'numeric_code',
        ])
        ->and($response->json('filter.id'))->toBe((string) $country->id)
        ->and($response->json('filter.name'))->toBe($country->name)
        ->and($response->json('filter.iso_alpha_2'))->toBe($country->iso_alpha_2)
        ->and($response->json('filter.iso_alpha_3'))->toBe($country->iso_alpha_3)
        ->and($response->json('filter.numeric_code'))->toBe((string) $country->numeric_code);
});

it('fails if country id doesnt exist', function () {
    $response = $this->getJson(route($this->route, [
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
    $response = $this->getJson(route($this->route, [
        'filter' => [
            'name' => 'name that does not exist',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json('data'))->toBeEmpty();
});

it('returns empty array if filter iso_alpha_2 doesnt exist', function () {
    $response = $this->getJson(route($this->route, [
        'filter' => [
            'iso_alpha_2' => 'XX',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json('data'))->toBeEmpty();
});

it('returns empty array if filter iso_alpha_3 doesnt exist', function () {
    $response = $this->getJson(route($this->route, [
        'filter' => [
            'iso_alpha_3' => 'XXX',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json('data'))->toBeEmpty();
});

it('returns empty array if filter numeric_code doesnt exist', function () {
    $response = $this->getJson(route($this->route, [
        'filter' => [
            'numeric_code' => 999,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json('data'))->toBeEmpty();
});

it('sorts countries with id sort', function () {
    $firstCountry = Country::query()->orderBy('id')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => [
            'id',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('total_records'))->toBe($this->numberToSeed)
        ->and($response->json('data')[0]['id'])->toBe($firstCountry->id);
});

it('sorts countries with id desc sort', function () {
    $firstCountry = Country::query()->orderBy('id', 'desc')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => [
            '-id',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('total_records'))->toBe($this->numberToSeed)
        ->and($response->json('data')[0]['id'])->toBe($firstCountry->id);
});

it('sorts countries with name sort', function () {
    $firstCountry = Country::query()->orderBy('name')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => [
            'name',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('total_records'))->toBe($this->numberToSeed)
        ->and($response->json('data')[0]['name'])->toBe($firstCountry->name);
});

it('sorts countries with name desc sort', function () {
    $firstCountry = Country::query()->orderBy('name', 'desc')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => [
            '-name',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('total_records'))->toBe($this->numberToSeed)
        ->and($response->json('data')[0]['name'])->toBe($firstCountry->name);
});

it('sorts countries with iso_alpha_2 sort', function () {
    $firstCountry = Country::query()->orderBy('iso_alpha_2')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => [
            'iso_alpha_2',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('total_records'))->toBe($this->numberToSeed)
        ->and($response->json('data')[0]['iso_alpha_2'])->toBe($firstCountry->iso_alpha_2);
});

it('sorts countries with iso_alpha_2 desc sort', function () {
    $firstCountry = Country::query()->orderBy('iso_alpha_2', 'desc')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => [
            '-iso_alpha_2',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('total_records'))->toBe($this->numberToSeed)
        ->and($response->json('data')[0]['iso_alpha_2'])->toBe($firstCountry->iso_alpha_2);
});

it('sorts countries with iso_alpha_3 sort', function () {
    $firstCountry = Country::query()->orderBy('iso_alpha_3')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => [
            'iso_alpha_3',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('total_records'))->toBe($this->numberToSeed)
        ->and($response->json('data')[0]['iso_alpha_3'])->toBe($firstCountry->iso_alpha_3);
});

it('sorts countries with iso_alpha_3 desc sort', function () {
    $firstCountry = Country::query()->orderBy('iso_alpha_3', 'desc')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => [
            '-iso_alpha_3',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('total_records'))->toBe($this->numberToSeed)
        ->and($response->json('data')[0]['iso_alpha_3'])->toBe($firstCountry->iso_alpha_3);
});

it('sorts countries with numeric_code sort', function () {
    $firstCountry = Country::query()->orderBy('numeric_code')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => [
            'numeric_code',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('total_records'))->toBe($this->numberToSeed)
        ->and($response->json('data')[0]['numeric_code'])->toBe($firstCountry->numeric_code);
});

it('sorts countries with numeric_code desc sort', function () {
    $firstCountry = Country::query()->orderBy('numeric_code', 'desc')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => [
            '-numeric_code',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('total_records'))->toBe($this->numberToSeed)
        ->and($response->json('data')[0]['numeric_code'])->toBe($firstCountry->numeric_code);
});
