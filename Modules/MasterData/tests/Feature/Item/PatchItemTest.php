<?php

use Modules\Admin\Models\User\User;
use Modules\MasterData\Database\Seeders\Permission\PermissionSeeder;
use Modules\MasterData\Enums\Item\ItemTypeEnum;
use Modules\MasterData\Models\Item\Item;
use Tymon\JWTAuth\Facades\JWTAuth;

dataset('item', [
    fn () => [
        'name' => 'chair updated',
        'type' => ItemTypeEnum::RAW_MATERIAL->value,
    ],
]);

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'master-data-items-update';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.master-data.items.patch';

    $this->item = Item::factory()->create([
        'name' => 'item',
        'type' => ItemTypeEnum::FINISHED_MATERIAL->value,
    ]);
})->with('item');

it('successfully patches all fields', function (array $data) {
    $this->assertDatabaseHas('items', [
        'id' => $this->item->id,
        'name' => 'item',
        'type' => ItemTypeEnum::FINISHED_MATERIAL->value,
    ]);

    $response = $this->patchJson(route($this->route, $this->item), $data);

    expect($response->status())->toBe(200)
        ->and($response->json('id'))->toBe($this->item->id)
        ->and($response->json('name'))->toBe($data['name'])
        ->and($response->json('type'))->toBe($data['type'])
        ->and($response->json())->toHaveKeys(['id', 'name', 'code', 'type', 'created_at', 'updated_at']);

    $this->assertDatabaseHas('items', [
        'id' => $this->item->id,
        'name' => $data['name'],
        'type' => $data['type'],
    ]);

    $this->assertDatabaseMissing('items', [
        'id' => $this->item->id,
        'name' => 'item',
    ]);
});

it('successfully patches only name', function (array $data) {
    $this->assertDatabaseHas('items', [
        'id' => $this->item->id,
        'name' => 'item',
    ]);

    $response = $this->patchJson(route($this->route, $this->item), [
        'name' => $data['name'],
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json('id'))->toBe($this->item->id)
        ->and($response->json('name'))->toBe($data['name'])
        ->and($response->json())->toHaveKeys(['id', 'name', 'code', 'type', 'created_at', 'updated_at']);

    $this->assertDatabaseHas('items', [
        'id' => $this->item->id,
        'name' => $data['name'],
    ]);

    $this->assertDatabaseMissing('items', [
        'id' => $this->item->id,
        'name' => 'item',
    ]);
});

it('successfully patches only type', function (array $data) {
    $this->assertDatabaseHas('items', [
        'id' => $this->item->id,
        'type' => ItemTypeEnum::FINISHED_MATERIAL->value,
    ]);

    $response = $this->patchJson(route($this->route, $this->item), [
        'type' => $data['type'],
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json('id'))->toBe($this->item->id)
        ->and($response->json('type'))->toBe($data['type'])
        ->and($response->json())->toHaveKeys(['id', 'name', 'code', 'type', 'created_at', 'updated_at']);

    $this->assertDatabaseHas('items', [
        'id' => $this->item->id,
        'type' => $data['type'],
    ]);

    $this->assertDatabaseMissing('items', [
        'id' => $this->item->id,
        'type' => ItemTypeEnum::FINISHED_MATERIAL->value,
    ]);
});

it('successfully patches with the same name for current record', function () {
    $this->assertDatabaseHas('items', [
        'id' => $this->item->id,
        'name' => $this->item->name,
    ]);

    $response = $this->patchJson(route($this->route, $this->item), [
        'name' => $this->item->name,
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json('id'))->toBe($this->item->id)
        ->and($response->json('name'))->toBe($this->item->name);

    $this->assertDatabaseHas('items', [
        'id' => $this->item->id,
        'name' => $this->item->name,
    ]);
});

it('fails when name is not unique', function (array $data) {
    Item::factory()->create(['name' => $data['name']]);

    $response = $this->patchJson(route($this->route, $this->item), [
        'name' => $data['name'],
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('name');
});

it('fails when name is not a string', function () {
    $response = $this->patchJson(route($this->route, $this->item), [
        'name' => 12345,
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('name');
});

it('fails when type is not part of ItemTypeEnum values', function () {
    $response = $this->patchJson(route($this->route, $this->item), [
        'type' => 'invalid_type',
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('type');
});

it('fails to patch non-existent item', function () {
    $response = $this->patchJson(route($this->route, 999999), [
        'name' => 'test',
    ]);

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');
});

it('fails to patch item without permission', function (array $data) {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->patchJson(route($this->route, $this->item), $data);

    expect($response->status())->toBe(403)
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
