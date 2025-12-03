<?php

use Modules\Admin\Models\User\User;
use Modules\Inventory\Database\Seeders\Permission\PermissionSeeder;
use Modules\Inventory\Models\Product\Product;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'inventory-products-create';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->routeName = 'api.inventory.products.store';
});

it('successfully stores products', function () {
    $this->assertDatabaseCount('products', 0);

    $response = $this->postJson(route($this->routeName, [
        'name' => 'name',
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'id',
            'name',
            'created_at',
            'updated_at',
        ]);

    $this->assertDatabaseCount('products', 1);
    $this->assertDatabaseHas('products', [
        'name' => 'name',
    ]);
});

it('fails to stores products with empty request', function () {
    $this->assertDatabaseCount('products', 0);

    $response = $this->postJson(route($this->routeName, []));

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('required')
        ->and($response->json('errors'))->toHaveKeys([
            'name',
        ])
        ->and($response->json('errors')['name'][0])->toContain('required');

    $this->assertDatabaseCount('products', 0);
});

it('fails if name is not unique', function () {
    Product::factory()->create([
        'name' => 'name',
    ]);

    $response = $this->postJson(route($this->routeName, [
        'name' => 'name',
    ]));

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('taken')
        ->and($response->json('errors'))->toHaveKeys([
            'name',
        ])
        ->and($response->json('errors')['name'][0])->toContain('taken');
});

it('fails to store products without permission', function () {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->postJson(route($this->routeName, [
        'name' => 'name',
    ]));

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
