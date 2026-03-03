<?php

use Modules\Admin\Models\User\User;
use Modules\Procurement\Database\Seeders\Permission\PermissionSeeder;
use Modules\Procurement\Models\Supplier\Supplier;
use Tymon\JWTAuth\Facades\JWTAuth;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'procurement-suppliers-read';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.procurement.suppliers.index';

    $this->page = 1;
    $this->limit = 15;
    $this->numberToSeed = 25;

    Supplier::factory()->count($this->numberToSeed)->create();
});

it('successfully lists suppliers', function () {
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
        ->and($response->json('data'))->toBeArray()
        ->and($response->json('data')[0])->toHaveKeys([
            'id',
            'name',
            'created_at',
            'updated_at',
        ]);
});

it('successfully lists suppliers with pagination', function () {
    $response = $this->getJson(route($this->route), [
        'page' => $this->page,
        'limit' => $this->limit,
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json())->toHaveKeys(['page', 'limit', 'total_records', 'total_pages', 'filter', 'data'])
        ->and($response->json('page'))->toBe($this->page)
        ->and($response->json('limit'))->toBe($this->limit)
        ->and($response->json('filter'))->toBe('')
        ->and($response->json('total_records'))->toBe($this->numberToSeed)
        ->and($response->json('total_pages'))->toBe((int) ceil($this->numberToSeed / $this->limit));
});

it('successfully lists suppliers with id filter', function () {
    $supplier = Supplier::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'id' => $supplier->id,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['id'])->toBe($supplier->id)
        ->and($response->json('filter'))->toHaveKey('id')
        ->and($response->json('filter.id'))->toBe((string) $supplier->id);
});

it('successfully lists suppliers with name filter', function () {
    $supplier = Supplier::query()->first();
    $supplier->update([
        'name' => 'Aaaaa',
    ]);

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'name' => $supplier->name,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['name'])->toBe($supplier->name)
        ->and($response->json('filter'))->toHaveKey('name')
        ->and($response->json('filter.name'))->toBe($supplier->name);
});

it('successfully lists suppliers with multiple filters', function () {
    $supplier = Supplier::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'id' => $supplier->id,
            'name' => $supplier->name,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['id'])->toBe($supplier->id)
        ->and($response->json('filter'))->toHaveKeys(['id', 'name']);
});

it('fails if supplier id doesnt exist', function () {
    $response = $this->getJson(route($this->route, [
        'filter' => [
            'id' => 99999,
        ],
    ]));

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('filter.id');
});

it('returns empty array if filter name doesnt exist', function () {
    $response = $this->getJson(route($this->route, [
        'filter' => [
            'name' => 'non-existent-supplier-name',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data'))->toBeEmpty();
});

it('sorts suppliers with name sort', function () {
    $firstSupplier = Supplier::query()->orderBy('name')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => ['name'],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['name'])->toBe($firstSupplier->name);
});

it('sorts suppliers with name desc sort', function () {
    $firstSupplier = Supplier::query()->orderBy('name', 'desc')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => ['-name'],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['name'])->toBe($firstSupplier->name);
});

it('fails to list suppliers without permission', function () {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->getJson(route($this->route));

    expect($response->status())->toBe(403)
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
