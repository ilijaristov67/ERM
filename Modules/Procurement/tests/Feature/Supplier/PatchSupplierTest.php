<?php

use Modules\Admin\Models\User\User;
use Modules\Procurement\Database\Seeders\Permission\PermissionSeeder;
use Modules\Procurement\Models\Supplier\Supplier;
use Tymon\JWTAuth\Facades\JWTAuth;

dataset('supplier', [
    fn () => [
        'name' => 'Tech Supplies Updated',
    ],
]);

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'procurement-suppliers-update';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.procurement.suppliers.patch';

    $this->supplier = Supplier::factory()->create([
        'name' => 'Original Supplier Name',
    ]);
})->with('supplier');

it('successfully patches name', function (array $data) {
    $this->assertDatabaseHas('suppliers', [
        'id' => $this->supplier->id,
        'name' => 'Original Supplier Name',
    ]);

    $response = $this->patchJson(route($this->route, $this->supplier), $data);

    expect($response->status())->toBe(200)
        ->and($response->json('id'))->toBe($this->supplier->id)
        ->and($response->json('name'))->toBe($data['name'])
        ->and($response->json())->toHaveKeys(['id', 'name', 'created_at', 'updated_at']);

    $this->assertDatabaseHas('suppliers', [
        'id' => $this->supplier->id,
        'name' => $data['name'],
    ]);

    $this->assertDatabaseMissing('suppliers', [
        'id' => $this->supplier->id,
        'name' => 'Original Supplier Name',
    ]);
});

it('successfully patches with the same name for current record', function () {
    $this->assertDatabaseHas('suppliers', [
        'id' => $this->supplier->id,
        'name' => $this->supplier->name,
    ]);

    $response = $this->patchJson(route($this->route, $this->supplier), [
        'name' => $this->supplier->name,
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json('id'))->toBe($this->supplier->id)
        ->and($response->json('name'))->toBe($this->supplier->name);

    $this->assertDatabaseHas('suppliers', [
        'id' => $this->supplier->id,
        'name' => $this->supplier->name,
    ]);
});

it('fails when all fields are missing', function () {
    $response = $this->patchJson(route($this->route, $this->supplier), []);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('required')
        ->and($response->json('errors'))->toHaveKey('name');
});

it('fails when name is not unique', function (array $data) {
    Supplier::factory()->create(['name' => $data['name']]);

    $response = $this->patchJson(route($this->route, $this->supplier), [
        'name' => $data['name'],
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('name')
        ->and($response->json('message'))->toContain('has already been taken');
});

it('fails when name is not a string', function () {
    $response = $this->patchJson(route($this->route, $this->supplier), [
        'name' => 12345,
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('name')
        ->and($response->json('message'))->toContain('must be a string');
});

it('fails to patch non-existent supplier', function (array $data) {
    $response = $this->patchJson(route($this->route, 999999), $data);

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');
});

it('fails to patch supplier without permission', function (array $data) {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->patchJson(route($this->route, $this->supplier), $data);

    expect($response->status())->toBe(403)
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
