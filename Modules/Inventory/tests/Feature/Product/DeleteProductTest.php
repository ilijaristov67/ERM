<?php

use Modules\Admin\Models\User\User;
use Modules\Inventory\Database\Seeders\Permission\PermissionSeeder;
use Modules\Inventory\Models\Product\Product;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'inventory-products-delete';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.inventory.products.delete';

    $this->product = Product::factory()->create();
});

it('successfully deletes product', function () {
    $response = $this->deleteJson(route($this->route, $this->product));

    expect($response->status())->toBe(200)
        ->and($response->json())->toHaveKeys(['message', 'code'])
        ->and($response->json('message'))->toBe(__('Successfully deleted', [
            'entity' => __('entities.product'),
        ]))
        ->and($response->json('code'))->toBe(200);

    $this->assertSoftDeleted('products', ['id' => $this->product->id]);
});

it('fails to delete product that doesnt exist', function () {
    $response = $this->deleteJson(route($this->route, 99999));

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');
});

it('fails to delete product without permission', function () {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->deleteJson(route($this->route, $this->product));

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
