<?php

use Modules\Admin\Models\User\User;
use Modules\MasterData\Database\Seeders\Permission\PermissionSeeder;
use Modules\MasterData\Enums\Location\LocationTypeEnum;
use Modules\MasterData\Models\Location\Location;
use Tymon\JWTAuth\Facades\JWTAuth;

dataset('location_patch', [
    fn () => [
        'name' => 'Secondary Warehouse Updated',
        'type' => LocationTypeEnum::STORE->value,
        'capacity' => '5000',
        'is_virtual' => true,
    ],
]);

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'master-data-locations-update';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.master-data.locations.patch';

    $this->location = Location::factory()->create([
        'name' => 'Main Warehouse',
        'type' => LocationTypeEnum::WAREHOUSE->value,
        'capacity' => '1000',
        'is_virtual' => false,
    ]);
});

it('successfully patches all fields', function (array $data) {
    $this->assertDatabaseHas('locations', [
        'id' => $this->location->id,
        'name' => 'Main Warehouse',
        'type' => LocationTypeEnum::WAREHOUSE->value,
        'capacity' => '1000',
        'is_virtual' => false,
    ]);

    $response = $this->patchJson(route($this->route, $this->location), $data);

    expect($response->status())->toBe(200)
        ->and($response->json('id'))->toBe($this->location->id)
        ->and($response->json('name'))->toBe($data['name'])
        ->and($response->json('type'))->toBe($data['type'])
        ->and($response->json('capacity'))->toBe((string) $data['capacity'])
        ->and($response->json('is_virtual'))->toBe($data['is_virtual'])
        ->and($response->json())->toHaveKeys(['id', 'name', 'type', 'capacity', 'is_virtual', 'created_at', 'updated_at']);

    $this->assertDatabaseHas('locations', [
        'id' => $this->location->id,
        'name' => $data['name'],
        'type' => $data['type'],
        'capacity' => $data['capacity'],
        'is_virtual' => $data['is_virtual'],
    ]);

    $this->assertDatabaseMissing('locations', [
        'id' => $this->location->id,
        'name' => 'Main Warehouse',
    ]);
})->with('location_patch');

it('successfully patches only name', function (array $data) {
    $this->assertDatabaseHas('locations', [
        'id' => $this->location->id,
        'name' => 'Main Warehouse',
    ]);

    $response = $this->patchJson(route($this->route, $this->location), [
        'name' => $data['name'],
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json('id'))->toBe($this->location->id)
        ->and($response->json('name'))->toBe($data['name'])
        ->and($response->json())->toHaveKeys(['id', 'name', 'type', 'capacity', 'is_virtual']);

    $this->assertDatabaseHas('locations', [
        'id' => $this->location->id,
        'name' => $data['name'],
    ]);

    $this->assertDatabaseMissing('locations', [
        'id' => $this->location->id,
        'name' => 'Main Warehouse',
    ]);
})->with('location_patch');

it('successfully patches only type', function (array $data) {
    $this->assertDatabaseHas('locations', [
        'id' => $this->location->id,
        'type' => LocationTypeEnum::WAREHOUSE->value,
    ]);

    $response = $this->patchJson(route($this->route, $this->location), [
        'type' => $data['type'],
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json('id'))->toBe($this->location->id)
        ->and($response->json('type'))->toBe($data['type']);

    $this->assertDatabaseHas('locations', [
        'id' => $this->location->id,
        'type' => $data['type'],
    ]);

    $this->assertDatabaseMissing('locations', [
        'id' => $this->location->id,
        'type' => LocationTypeEnum::WAREHOUSE->value,
    ]);
})->with('location_patch');

it('successfully patches only capacity', function (array $data) {
    $this->assertDatabaseHas('locations', [
        'id' => $this->location->id,
        'capacity' => '1000',
    ]);

    $response = $this->patchJson(route($this->route, $this->location), [
        'capacity' => $data['capacity'],
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json('id'))->toBe($this->location->id)
        ->and($response->json('capacity'))->toBe((string) $data['capacity']);

    $this->assertDatabaseHas('locations', [
        'id' => $this->location->id,
        'capacity' => $data['capacity'],
    ]);

    $this->assertDatabaseMissing('locations', [
        'id' => $this->location->id,
        'capacity' => '1000',
    ]);
})->with('location_patch');

it('successfully patches only is_virtual', function (array $data) {
    $this->assertDatabaseHas('locations', [
        'id' => $this->location->id,
        'is_virtual' => false,
    ]);

    $response = $this->patchJson(route($this->route, $this->location), [
        'is_virtual' => $data['is_virtual'],
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json('id'))->toBe($this->location->id)
        ->and($response->json('is_virtual'))->toBe($data['is_virtual']);

    $this->assertDatabaseHas('locations', [
        'id' => $this->location->id,
        'is_virtual' => $data['is_virtual'],
    ]);

    $this->assertDatabaseMissing('locations', [
        'id' => $this->location->id,
        'is_virtual' => false,
    ]);
})->with('location_patch');

it('successfully patches with the same name for current record', function () {
    $this->assertDatabaseHas('locations', [
        'id' => $this->location->id,
        'name' => $this->location->name,
    ]);

    $response = $this->patchJson(route($this->route, $this->location), [
        'name' => $this->location->name,
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json('id'))->toBe($this->location->id)
        ->and($response->json('name'))->toBe($this->location->name);

    $this->assertDatabaseHas('locations', [
        'id' => $this->location->id,
        'name' => $this->location->name,
    ]);
});

it('fails when all fields are missing', function () {
    $response = $this->patchJson(route($this->route, $this->location), []);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('is required when none of')
        ->and($response->json('errors'))->toHaveKeys([
            'name',
            'type',
            'capacity',
            'is_virtual',
        ])
        ->and($response->json('errors')['name'][0])->toContain('required')
        ->and($response->json('errors')['type'][0])->toContain('required')
        ->and($response->json('errors')['capacity'][0])->toContain('required')
        ->and($response->json('errors')['is_virtual'][0])->toContain('required');
});

it('fails when name is not unique', function (array $data) {
    Location::factory()->create(['name' => $data['name']]);

    $response = $this->patchJson(route($this->route, $this->location), [
        'name' => $data['name'],
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('name')
        ->and($response->json('message'))->toContain('already been taken');
})->with('location_patch');

it('fails when name is not a string', function () {
    $response = $this->patchJson(route($this->route, $this->location), [
        'name' => 12345,
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('name')
        ->and($response->json('message'))->toContain('must be a string');
});

it('fails when type is not part of LocationTypeEnum values', function () {
    $response = $this->patchJson(route($this->route, $this->location), [
        'type' => 'invalid_type',
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('type')
        ->and($response->json('message'))->toContain('is invalid');
});

it('fails when capacity is not numeric', function () {
    $response = $this->patchJson(route($this->route, $this->location), [
        'capacity' => 'not-a-number',
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('capacity')
        ->and($response->json('message'))->toContain('must be a number');
});

it('fails when capacity is below or equal to 0', function () {
    $response = $this->patchJson(route($this->route, $this->location), [
        'capacity' => 0,
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('capacity')
        ->and($response->json('message'))->toContain('must be greater than 0');
});

it('fails when is_virtual is not boolean', function () {
    $response = $this->patchJson(route($this->route, $this->location), [
        'is_virtual' => 'not-a-bool',
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('is_virtual')
        ->and($response->json('message'))->toContain('must be true or false');
});

it('fails to patch non-existent location', function () {
    $response = $this->patchJson(route($this->route, 999999), [
        'name' => 'test',
    ]);

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');
});

it('fails to patch location without permission', function (array $data) {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->patchJson(route($this->route, $this->location), $data);

    expect($response->status())->toBe(403)
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
})->with('location_patch');
