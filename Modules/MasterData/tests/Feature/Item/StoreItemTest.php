<?php

use Modules\Admin\Models\User\User;
use Modules\MasterData\Database\Seeders\Permission\PermissionSeeder;
use Modules\MasterData\Enums\Item\ItemTypeEnum;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'master-data-items-create';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.master-data.items.store';
});

dataset('item', [
    fn () => [
        'name' => 'chair',
        'type' => ItemTypeEnum::RAW_MATERIAL->value,
    ],
]);

it('successfully stores item', function (array $data) {
    $this->assertDatabaseCount('items', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'id',
            'name',
            'code',
            'type',
            'created_at',
            'updated_at',
        ]);

    $this->assertDatabaseCount('items', 1);
    $this->assertDatabaseHas('items', [
        'id' => $response->json('id'),
        'name' => $data['name'],
        'type' => $data['type'],
    ]);
})->with('item');

it('fails without data', function () {
    $this->assertDatabaseCount('items', 0);

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
        ]);

    $this->assertDatabaseCount('items', 0);
});

it('fails when name is not unique', function (array $data) {
    $this->postJson(route($this->route), $data);

    $this->assertDatabaseCount('items', 1);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('already been taken')
        ->and($response->json('errors'))->toHaveKey('name');

    $this->assertDatabaseCount('items', 1);
})->with('item');

it('fails when type is not part of ItemTypeEnum values', function (array $data) {
    $data['type'] = 'invalid_type';

    $this->assertDatabaseCount('items', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('is invalid')
        ->and($response->json('errors'))->toHaveKey('type');

    $this->assertDatabaseCount('items', 0);
})->with('item');

it('fails when name is not a string', function (array $data) {
    $data['name'] = 12345;

    $this->assertDatabaseCount('items', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('must be a string')
        ->and($response->json('errors'))->toHaveKey('name');

    $this->assertDatabaseCount('items', 0);
})->with('item');

it('fails when type is not a string', function (array $data) {
    $data['type'] = 123;

    $this->assertDatabaseCount('items', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('must be a string')
        ->and($response->json('errors'))->toHaveKey('type');

    $this->assertDatabaseCount('items', 0);
})->with('item');

it('fails to store item without permission', function (array $data) {
    $this->user->revokePermissionTo($this->permission);

    $this->assertDatabaseCount('items', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));

    $this->assertDatabaseCount('items', 0);
})->with('item');
