<?php

use Modules\Admin\Models\User\User;
use Modules\Procurement\Database\Seeders\Permission\PermissionSeeder;
use Modules\Procurement\Models\Supplier\Supplier;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'procurement-suppliers-delete';
    $this->route = 'api.procurement.suppliers.delete';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);
    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->supplier = Supplier::factory()->create();
});

it('successfully deletes supplier', function () {
    $response = $this->deleteJson(route($this->route, $this->supplier));

    expect($response->status())->toBe(200)
        ->and($response->json())->toHaveKeys(['message', 'code'])
        ->and($response->json('message'))->toBe(__('Successfully deleted', [
            'entity' => __('entities.supplier'),
        ]))
        ->and($response->json('code'))->toBe(200);

    $this->assertSoftDeleted('suppliers', ['id' => $this->supplier->id]);
});

it('fails to delete supplier that doesnt exist', function () {
    $response = $this->deleteJson(route($this->route, 99999));

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');
});

it('fails to delete supplier without permission', function () {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->deleteJson(route($this->route, $this->supplier));

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
