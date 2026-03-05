<?php

use Modules\Admin\Models\User\User;
use Modules\Import\Database\Seeders\Permission\PermissionSeeder;
use Modules\Import\Models\Import\Import;
use Modules\MasterData\Models\Location\Location;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'import-lots-create';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.import.lots.store';

    $this->import = Import::factory()->create();
});

dataset('import lot data', [
    fn () => [
        'location_id' => Location::factory()->create()->id,
        'user_id' => $this->user->id,
    ],
]);

it('successfully stores import lots', function (array $data) {
    $this->assertDatabaseCount('import_lots', 0);

    $response = $this->postJson(route($this->route, $this->import), $data);

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

    $this->assertDatabaseCount('import_lots', 1);
    $this->assertDatabaseHas('import_lots', [
        'id' => $response->json('id'),
        'import_id' => $this->import->id,
        'location_id' => $data['location_id'],
        'user_id' => $this->user->id,
    ]);
})->with('import lot data');

it('fails to store import lot with empty request', function () {
    $this->assertDatabaseCount('import_lots', 0);

    $response = $this->postJson(route($this->route, $this->import), []);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('errors'))->toHaveKey('location_id')
        ->and($response->json('errors')['location_id'][0])->toContain('required');
});

it('fails to store import lot with invalid location id type', function (array $data) {
    $this->assertDatabaseCount('import_lots', 0);

    $data['location_id'] = 'invalid';

    $response = $this->postJson(route($this->route, $this->import), $data);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('location_id')
        ->and($response->json('errors')['location_id'][0])->toContain('must be an integer');
})->with('import lot data');

it('fails to store import lot with non existent location', function (array $data) {
    $this->assertDatabaseCount('import_lots', 0);

    $data['location_id'] = 999999999;

    $response = $this->postJson(route($this->route, $this->import), $data);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('location_id')
        ->and($response->json('errors')['location_id'][0])->toContain('invalid');
})->with('import lot data');

it('fails to store import lot without permission', function (array $data) {
    $this->user->revokePermissionTo($this->permission);

    $this->assertDatabaseCount('import_lots', 0);

    $response = $this->postJson(route($this->route, $this->import), $data);

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));

    $this->assertDatabaseCount('import_lots', 0);
})->with('import lot data');

it('fails to store import lot for non-existent import model', function (array $data) {
    $response = $this->postJson(str_replace($this->import->id, '999999', route($this->route, $this->import)), $data);

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');
})->with('import lot data');
