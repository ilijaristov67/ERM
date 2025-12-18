<?php

use Modules\Admin\Models\User\User;
use Modules\MasterData\Database\Seeders\Permission\PermissionSeeder;
use Modules\MasterData\Enums\Location\LocationTypeEnum;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'master-data-locations-create';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.master-data.locations.store';
});

dataset('location', [
    fn () => [
        'name' => 'Main Warehouse',
        'type' => LocationTypeEnum::WAREHOUSE->value,
        'capacity' => '1000',
        'is_virtual' => false,
    ],
]);

it('successfully stores location', function (array $data) {
    $this->assertDatabaseCount('locations', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'id',
            'name',
            'type',
            'capacity',
            'is_virtual',
            'created_at',
            'updated_at',
        ]);

    $this->assertDatabaseCount('locations', 1);
    $this->assertDatabaseHas('locations', [
        'id' => $response->json('id'),
        'name' => $data['name'],
        'type' => $data['type'],
        'capacity' => $data['capacity'],
        'is_virtual' => $data['is_virtual'],
    ]);
})->with('location');

it('fails without data', function () {
    $this->assertDatabaseCount('locations', 0);

    $response = $this->postJson(route($this->route), []);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('is required')
        ->and($response->json('errors'))->toHaveKeys([
            'name',
            'type',
            'capacity',
            'is_virtual',
        ]);

    $this->assertDatabaseCount('locations', 0);
});

it('fails when name is not unique', function (array $data) {
    $this->postJson(route($this->route), $data);

    $this->assertDatabaseCount('locations', 1);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('already been taken')
        ->and($response->json('errors'))->toHaveKey('name');

    $this->assertDatabaseCount('locations', 1);
})->with('location');

it('fails when type is not part of LocationTypeEnum values', function (array $data) {
    $data['type'] = 'invalid_type';

    $this->assertDatabaseCount('locations', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('is invalid')
        ->and($response->json('errors'))->toHaveKey('type');

    $this->assertDatabaseCount('locations', 0);
})->with('location');

it('fails when name is not a string', function (array $data) {
    $data['name'] = 12345;

    $this->assertDatabaseCount('locations', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('must be a string')
        ->and($response->json('errors'))->toHaveKey('name');

    $this->assertDatabaseCount('locations', 0);
})->with('location');

it('fails when type is not a string', function (array $data) {
    $data['type'] = 123;

    $this->assertDatabaseCount('locations', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('must be a string')
        ->and($response->json('errors'))->toHaveKey('type');

    $this->assertDatabaseCount('locations', 0);
})->with('location');

it('fails to store location without permission', function (array $data) {
    $this->user->revokePermissionTo($this->permission);

    $this->assertDatabaseCount('locations', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));

    $this->assertDatabaseCount('locations', 0);
})->with('location');

it('fails when capacity is missing', function (array $data) {
    unset($data['capacity']);

    $this->assertDatabaseCount('locations', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('is required')
        ->and($response->json('errors'))->toHaveKey('capacity');

    $this->assertDatabaseCount('locations', 0);
})->with('location');

it('fails when capacity is below 1', function (array $data) {
    $data['capacity'] = 0;

    $this->assertDatabaseCount('locations', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('The capacity field must be greater than 0')
        ->and($response->json('errors'))->toHaveKey('capacity');

    $this->assertDatabaseCount('locations', 0);
})->with('location');

it('fails when capacity is not numeric', function (array $data) {
    $data['capacity'] = 'not-a-number';

    $this->assertDatabaseCount('locations', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('must be a number')
        ->and($response->json('errors'))->toHaveKey('capacity');

    $this->assertDatabaseCount('locations', 0);
})->with('location');

it('fails when is_virtual is missing', function (array $data) {
    unset($data['is_virtual']);

    $this->assertDatabaseCount('locations', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('is required')
        ->and($response->json('errors'))->toHaveKey('is_virtual');

    $this->assertDatabaseCount('locations', 0);
})->with('location');

it('fails when is_virtual is not boolean', function (array $data) {
    $data['is_virtual'] = 'not-a-boolean';

    $this->assertDatabaseCount('locations', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('must be true or false')
        ->and($response->json('errors'))->toHaveKey('is_virtual');

    $this->assertDatabaseCount('locations', 0);
})->with('location');
