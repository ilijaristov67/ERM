<?php

use Modules\Admin\Models\User\User;
use Modules\Inventory\Database\Seeders\Permission\PermissionSeeder;
use Modules\Inventory\Models\Product\Product;

dataset('product-data', [
    fn() => [
        'name' => 'new name'
    ]
]);

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'inventory-products-update';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->routeName = 'api.inventory.products.patch';
    $this->product = Product::factory()->create([
        'name' => 'name'
    ]);
});
