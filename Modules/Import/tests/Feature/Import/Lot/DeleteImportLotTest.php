<?php

use Modules\Admin\Models\User\User;
use Modules\Import\Database\Seeders\Permission\PermissionSeeder;
use Modules\Import\Models\Import\Import;
use Modules\Import\Models\Import\Lot\ImportLot;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'import-lots-delete';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.import.lots.delete';

    $this->import = Import::factory()->create();
    $this->importLot = ImportLot::factory()->create([
        'import_id' => $this->import->id,
    ]);
});

it('successfully deletes import lot', function () {
    $this->assertDatabaseHas('import_lots', ['id' => $this->importLot->id]);

    $response = $this->deleteJson(route($this->route, [$this->import, $this->importLot]));

    expect($response->status())->toBe(200)
        ->and($response->json())->toHaveKeys(['message', 'code'])
        ->and($response->json('message'))->toBe(__('Successfully deleted', [
            'entity' => __('entities.import_lot'),
        ]))
        ->and($response->json('code'))->toBe(200);

    $this->assertDatabaseMissing('import_lots', ['id' => $this->importLot->id]);
});

it('fails to delete import lot that doesnt exist', function () {
    $response = $this->deleteJson(route($this->route, [$this->import, 999999999]));

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');
});

it('fails to delete import lot without permission', function () {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->deleteJson(route($this->route, [$this->import, $this->importLot]));

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));

    $this->assertDatabaseHas('import_lots', ['id' => $this->importLot->id]);
});

it('fails to delete import lot when parent import does not exist', function () {
    $response = $this->deleteJson(route($this->route, [999999999, $this->importLot]));

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');

    $this->assertDatabaseHas('import_lots', ['id' => $this->importLot->id]);
});
