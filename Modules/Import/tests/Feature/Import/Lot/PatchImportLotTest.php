<?php

use Modules\Admin\Models\User\User;
use Modules\Import\Database\Seeders\Permission\PermissionSeeder;
use Modules\Import\Models\Import\Import;
use Modules\Import\Models\Import\Lot\ImportLot;
use Modules\MasterData\Models\Location\Location;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'import-lots-update';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.import.lots.patch';

    $this->location = Location::factory()->create();
    $this->import = Import::factory()->create();

    $this->importLot = ImportLot::factory()->for($this->location)->for($this->import)->create();
});

dataset('import lot patch data', [
    fn () => [
        'location_id' => Location::factory()->create()->id,
    ],
]);

it('successfully patches import lot', function (array $data) {
    $this->assertDatabaseHas('import_lots', [
        'id' => $this->importLot->id,
        'location_id' => $this->location->id,
    ]);

    $response = $this->patchJson(route($this->route, [$this->import, $this->importLot]), $data);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'id',
            'import',
            'location',
            'user',
            'created_at',
            'updated_at',
        ]);

    $this->assertDatabaseHas('import_lots', [
        'id' => $this->importLot->id,
        'location_id' => $data['location_id'],
    ]);

    $this->assertDatabaseMissing('import_lots', [
        'id' => $this->importLot->id,
        'location_id' => $this->location->id,
    ]);
})->with('import lot patch data');

it('fails to patch import lot with empty request', function () {
    $response = $this->patchJson(route($this->route, [$this->import, $this->importLot]), []);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('errors'))->toHaveKey('location_id')
        ->and($response->json('errors')['location_id'][0])->toContain('required');
});

it('fails to patch import lot with invalid location id type', function (array $data) {
    $data['location_id'] = 'invalid';

    $response = $this->patchJson(route($this->route, [$this->import, $this->importLot]), $data);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('location_id')
        ->and($response->json('errors')['location_id'][0])->toContain('must be an integer');
})->with('import lot patch data');

it('fails to patch import lot with non existent location', function (array $data) {
    $data['location_id'] = 999999999;

    $response = $this->patchJson(route($this->route, [$this->import, $this->importLot]), $data);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('location_id')
        ->and($response->json('errors')['location_id'][0])->toContain('invalid');
})->with('import lot patch data');

it('fails to patch import lot without permission', function (array $data) {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->patchJson(route($this->route, [$this->import, $this->importLot]), $data);

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));

    $this->assertDatabaseHas('import_lots', [
        'id' => $this->importLot->id,
        'location_id' => $this->location->id,
    ]);
})->with('import lot patch data');

it('fails to patch import lot for non-existent import lot model', function (array $data) {
    $response = $this->patchJson(str_replace($this->importLot->id, '999999', route($this->route, [$this->import, $this->importLot])), $data);

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');
})->with('import lot patch data');
