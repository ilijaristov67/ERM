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
