<?php

use Modules\Admin\Models\User\User;
use Modules\Inventory\Database\Seeders\Permission\PermissionSeeder;
use Modules\Inventory\Models\Product\Product;
use Tymon\JWTAuth\Facades\JWTAuth;

dataset('product-data', [
    fn () => [
        'name' => 'new name',
    ],
]);

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'inventory-products-update';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.inventory.products.patch';

    $this->product = Product::factory()->create([
        'name' => 'name',
    ]);
})->with('product-data');

it('successfully patches only name', function (array $data) {
    $this->assertDatabaseHas('products', [
        'id' => $this->product->id,
        'name' => 'name',
    ]);

    $response = $this->patchJson(route($this->route, $this->product), [
        'name' => $data['name'],
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json('name'))->toBe($data['name']);

    $this->assertDatabaseHas('products', [
        'id' => $this->product->id,
        'name' => 'new name',
    ]);
});

it('successfully patches with same name for same product', function () {
    $this->assertDatabaseHas('products', [
        'id' => $this->product->id,
        'name' => 'name',
    ]);

    $response = $this->patchJson(route($this->route, $this->product), [
        'name' => 'name',
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json('name'))->toBe('name');

    $this->assertDatabaseHas('products', [
        'id' => $this->product->id,
        'name' => 'name',
    ]);
});

it('fails when name is missing', function () {
    $this->assertDatabaseHas('products', [
        'id' => $this->product->id,
        'name' => 'name',
    ]);

    $response = $this->patchJson(route($this->route, $this->product), []);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('name');

    $this->assertDatabaseHas('products', [
        'id' => $this->product->id,
        'name' => 'name',
    ]);
});

it('fails when name is not a string', function () {
    $this->assertDatabaseHas('products', [
        'id' => $this->product->id,
        'name' => 'name',
    ]);

    $response = $this->patchJson(route($this->route, $this->product), [
        'name' => 12345,
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('name');

    $this->assertDatabaseHas('products', [
        'id' => $this->product->id,
        'name' => 'name',
    ]);
});

it('fails when name is not unique', function (array $data) {
    Product::factory()->create(['name' => $data['name']]);

    $this->assertDatabaseHas('products', [
        'name' => $data['name'],
    ]);

    $this->assertDatabaseHas('products', [
        'id' => $this->product->id,
        'name' => 'name',
    ]);

    $response = $this->patchJson(route($this->route, $this->product), [
        'name' => $data['name'],
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('name');

    $this->assertDatabaseHas('products', [
        'id' => $this->product->id,
        'name' => 'name',
    ]);
});

it('fails to patch non-existent product', function (array $data) {
    $response = $this->patchJson(route($this->route, 999999), [
        'name' => $data['name'],
    ]);

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');
});

it('fails to patch product without permission', function (array $data) {
    $this->user->revokePermissionTo($this->permission);

    $this->assertDatabaseHas('products', [
        'id' => $this->product->id,
        'name' => 'name',
    ]);

    $response = $this->patchJson(route($this->route, $this->product), [
        'name' => $data['name'],
    ]);

    expect($response->status())->toBe(403)
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));

    $this->assertDatabaseHas('products', [
        'id' => $this->product->id,
        'name' => 'name',
    ]);
});
