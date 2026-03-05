<?php

use Modules\Admin\Models\User\User;
use Modules\Import\Database\Seeders\Permission\PermissionSeeder;
use Modules\Import\Models\Import\Import;
use Modules\Import\Models\Import\Lot\ImportLot;
use Modules\MasterData\Models\Location\Location;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'import-lots-read';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.import.lots.index';
    $this->numToSeed = 25;
    $this->page = 1;
    $this->limit = 15;

    $this->import = Import::factory()->create();
});

dataset('import lot data', [
    fn () => ImportLot::factory()->count($this->numToSeed)->create([
        'import_id' => $this->import->id,
    ]),
]);

it('successfully lists import lots for a specific import', function () {
    $otherImport = Import::factory()->create();
    ImportLot::factory()->count(5)->create(['import_id' => $otherImport->id]);

    $response = $this->getJson(route($this->route, $this->import));

    expect($response->status())->toBe(200)
        ->and($response->json())->toHaveKeys(['page', 'limit', 'total_records', 'total_pages', 'filter', 'data'])
        ->and($response->json()['page'])->toBe($this->page)
        ->and($response->json()['limit'])->toBe($this->limit)
        ->and($response->json()['total_records'])->toBe($this->numToSeed)
        ->and($response->json()['data'])->toBeArray()
        ->and($response->json()['data'][0])->toHaveKeys([
            'id',
            'import',
            'location',
            'user',
            'created_at',
            'updated_at',
        ])
        ->and(collect($response->json('data'))->pluck('import.id')->unique()->toArray())->toBe([$this->import->id]);
})->with('import lot data');

it('successfully lists import lots with pagination', function () {
    $limit = 5;

    $response = $this->getJson(route($this->route, [
        'import' => $this->import->id,
        'page' => 2,
        'limit' => $limit,
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('page'))->toBe(2)
        ->and($response->json('limit'))->toBe($limit)
        ->and($response->json('total_pages'))->toBe((int) ceil($this->numToSeed / $limit));
})->with('import lot data');

it('fails validation for all invalid filters and sorts', function () {
    $response = $this->getJson(route($this->route, [
        'import' => $this->import->id,
        'filter' => [
            'id' => 'invalid-string',
            'location_id' => 999999999,
            'user_id' => 999999999,
            'arrived_at' => ['not-a-string'],
        ],
        'sort' => ['unsupported_column'],
    ]));

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKeys([
            'filter.id',
            'filter.location_id',
            'filter.user_id',
            'filter.arrived_at',
            'sort.0',
        ])
        ->and($response->json('errors')['filter.id'][0])->toContain('must be an integer')
        ->and($response->json('errors')['filter.location_id'][0])->toContain('invalid')
        ->and($response->json('errors')['filter.user_id'][0])->toContain('invalid')
        ->and($response->json('errors')['filter.arrived_at'][0])->toContain('must be a string')
        ->and($response->json('errors')['sort.0'][0])->toContain('invalid');
});

it('successfully filters import lots by all available filters', function () {
    $targetLocation = Location::factory()->create();
    $targetUser = User::factory()->create();

    $targetLot = ImportLot::factory()->create([
        'import_id' => $this->import->id,
        'location_id' => $targetLocation->id,
        'user_id' => $targetUser->id,
        'arrived_at' => now()->format('Y-m-d H:i:s'),
    ]);

    $response = $this->getJson(route($this->route, [
        'import' => $this->import->id,
        'filter' => [
            'id' => $targetLot->id,
            'location_id' => $targetLocation->id,
            'user_id' => $targetUser->id,
            'arrived_at' => $targetLot->arrived_at,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('total_records'))->toBe(1)
        ->and($response->json('data')[0]['id'])->toBe($targetLot->id)
        ->and($response->json('data')[0]['location']['id'])->toBe($targetLocation->id)
        ->and($response->json('data')[0]['user']['id'])->toBe($targetUser->id);
})->with('import lot data');

it('sorts import lots by direct columns', function () {
    ImportLot::query()->where('import_id', $this->import->id)->delete();

    $lotA = ImportLot::factory()->create(['import_id' => $this->import->id, 'created_at' => now()->subDays(1)]);
    $lotB = ImportLot::factory()->create(['import_id' => $this->import->id, 'created_at' => now()->subDays(2)]);

    $response = $this->getJson(route($this->route, [
        'import' => $this->import->id,
        'sort' => ['created_at'],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['id'])->toBe($lotB->id)
        ->and($response->json('data')[1]['id'])->toBe($lotA->id);
});

it('fails to list import lots without permission', function () {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->getJson(route($this->route, $this->import));

    expect($response->status())->toBe(403)
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
