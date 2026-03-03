<?php

use Modules\Admin\Models\User\User;
use Modules\MasterData\Database\Seeders\Permission\PermissionSeeder;
use Modules\MasterData\Models\Item\Item;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'master-data-items-delete';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.master-data.items.delete';

    $this->item = Item::factory()->create();
});

it('successfully deletes item', function () {
    $response = $this->deleteJson(route($this->route, $this->item));

    expect($response->status())->toBe(200)
        ->and($response->json())->toHaveKeys(['message', 'code'])
        ->and($response->json('message'))->toBe(__('Successfully deleted', [
            'entity' => __('entities.item'),
        ]))
        ->and($response->json('code'))->toBe(200);

    $this->assertSoftDeleted('items', ['id' => $this->item->id]);
});

it('fails to delete item that doesnt exist', function () {
    $response = $this->deleteJson(route($this->route, 99999));

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');
});

it('fails to delete item without permission', function () {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->deleteJson(route($this->route, $this->item));

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
