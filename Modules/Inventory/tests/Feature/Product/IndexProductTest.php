<?php

use Modules\Admin\Models\User\User;
use Modules\Inventory\Database\Seeders\Permission\PermissionSeeder;
use Modules\Inventory\Models\Product\Product;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'inventory-products-read';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->routeName = 'api.inventory.products.index';

    $this->page = 1;
    $this->limit = 15;
    $this->numberToSeed = 15;

    $this->products = Product::factory()->count($this->numberToSeed)->create();
});

it('successfully lists products', function () {
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
            'created_at',
            'updated_at',
        ]);
});

it('successfully lists products with pagination', function () {
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

it('successfully lists products filtered by id and name', function () {
    $product = Product::query()->first();

    $response = $this->getJson(route($this->routeName, [
        'filter' => [
            'id' => $product->id,
            'name' => $product->name,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('page'))->toBe(1)
        ->and($response->json('limit'))->toBe(15)
        ->and($response->json('total_pages'))->toBe(1)
        ->and($response->json()['data'])->toBeArray()
        ->and($response->json()['data'][0]['id'])->toBe($product->id)
        ->and($response->json()['data'][0]['name'])->toBe($product->name)
        ->and($response->json('filter'))->toHaveKeys([
            'id',
            'name',
        ])
        ->and($response->json('filter.id'))->toBe((string) $product->id)
        ->and($response->json('filter.name'))->toBe($product->name);
});

it('fails if product id does not exist', function () {
    $response = $this->getJson(route($this->routeName, [
        'filter' => [
            'id' => 999999,
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

it('returns empty array if filter name does not exist', function () {
    $response = $this->getJson(route($this->routeName, [
        'filter' => [
            'name' => 'name that does not exist',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json('data'))->toBeEmpty();
});

it('fails to list products when user does not have permission', function () {
    $userWithoutPermission = User::factory()->create();

    $this->actingAs($userWithoutPermission);

    $token = JWTAuth::fromUser($userWithoutPermission);
    $this->withHeader('Authorization', 'Bearer '.$token);

    $this->user->revokePermissionTo($this->permission);

    $response = $this->postJson(route($this->routeName, []));

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
