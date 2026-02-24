<?php

use Modules\Admin\Models\User\User;
use Modules\Import\Database\Seeders\Permission\PermissionSeeder;
use Modules\Import\Http\Import;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'import-delete';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.import.delete';

    $this->import = Import::factory()->create();
});

it('successfully deletes import', function () {
    $response = $this->deleteJson(route($this->route, $this->import));

    expect($response->status())->toBe(200)
        ->and($response->json())->toHaveKeys(['message', 'code'])
        ->and($response->json('message'))->toBe(__('Successfully deleted', [
            'entity' => __('entities.import'),
        ]))
        ->and($response->json('code'))->toBe(200);

    $this->assertDatabaseMissing('imports', ['id' => $this->import->id]);
});

it('fails to delete import that doesnt exist', function () {
    $response = $this->deleteJson(route($this->route, 999999999));

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');
});

it('fails to delete import without permission', function () {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->deleteJson(route($this->route, $this->import));

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
