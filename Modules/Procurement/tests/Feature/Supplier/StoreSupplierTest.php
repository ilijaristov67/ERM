<?php

use Modules\Admin\Models\User\User;
use Modules\Procurement\Database\Seeders\Permission\PermissionSeeder;
use Tymon\JWTAuth\Facades\JWTAuth;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'procurement-suppliers-create';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.procurement.suppliers.store';
});

dataset('supplier', [
    fn () => [
        'name' => 'Tech Supplies Ltd',
    ],
]);

it('successfully stores supplier', function (array $data) {
    $this->assertDatabaseCount('suppliers', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'id',
            'name',
            'created_at',
            'updated_at',
        ]);

    $this->assertDatabaseCount('suppliers', 1);
    $this->assertDatabaseHas('suppliers', [
        'id' => $response->json('id'),
        'name' => $data['name'],
    ]);
})->with('supplier');

it('fails without data', function () {
    $this->assertDatabaseCount('suppliers', 0);

    $response = $this->postJson(route($this->route), []);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('is required')
        ->and($response->json('errors'))->toHaveKey('name');

    $this->assertDatabaseCount('suppliers', 0);
});

it('fails when name is not unique', function (array $data) {
    $this->postJson(route($this->route), $data);

    $this->assertDatabaseCount('suppliers', 1);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('already been taken')
        ->and($response->json('errors'))->toHaveKey('name');

    $this->assertDatabaseCount('suppliers', 1);
})->with('supplier');

it('fails when name is not a string', function (array $data) {
    $data['name'] = 12345;

    $this->assertDatabaseCount('suppliers', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('must be a string')
        ->and($response->json('errors'))->toHaveKey('name');

    $this->assertDatabaseCount('suppliers', 0);
})->with('supplier');

it('fails to store supplier without permission', function (array $data) {
    $this->user->revokePermissionTo($this->permission);

    $this->assertDatabaseCount('suppliers', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));

    $this->assertDatabaseCount('suppliers', 0);
})->with('supplier');
