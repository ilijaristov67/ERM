<?php

use Carbon\Carbon;
use Modules\Admin\Models\User\User;
use Modules\Import\Database\Seeders\Permission\PermissionSeeder;
use Modules\Import\Models\Import\Import;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'import-read';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.import.index';
    $this->numToSeed = 25;
    $this->page = 1;
    $this->limit = 15;
});

dataset('import data', [
    fn () => Import::factory()->count($this->numToSeed)->create([
        'user_id' => User::factory()->create()->id,
    ]),
]);

it('successfully lists import', function () {
    $response = $this->getJson(route($this->route));

    expect($response->status())->toBe(200)
        ->and($response->json())
        ->toHaveKeys(['page', 'limit', 'total_records', 'total_pages', 'filter', 'data'])
        ->and($response->json()['page'])->toBe($this->page)
        ->and($response->json()['limit'])->toBe($this->limit)
        ->and($response->json()['filter'])->toBe('')
        ->and($response->json()['total_records'])->toBe($this->numToSeed)
        ->and($response->json()['total_pages'])->toBe((int) ceil($this->numToSeed / $this->limit))
        ->and($response->json()['data'])->toBeArray()
        ->and($response->json()['data'][0])->toHaveKeys([
            'id',
            'number',
            'user',
            'import_date',
            'supplier',
            'invoice',
            'created_at',
            'updated_at',
        ]);
})->with('import data');

it('successfully lists imports with different pagination', function () {
    $count = Import::count();
    $limit = 5;

    $response = $this->getJson(route($this->route, [
        'page' => 2,
        'limit' => $limit,
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('page'))->toBe(2)
        ->and($response->json('limit'))->toBe($limit)
        ->and($response->json('total_pages'))->toBe((int) ceil($count / $limit));
})->with('import data');

it('successfully lists imports with id filter', function () {
    $target = Import::factory()->create();
    Import::factory()->create();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'id' => $target->id,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('total_records'))->toBe(1)
        ->and($response->json('data')[0]['id'])->toBe($target->id)
        ->and($response->json('filter')['id'])->toBe((string) $target->id);
});

it('successfully lists imports with number filter', function () {
    $import = Import::first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'number' => $import->number,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('total_records'))->toBe(1)
        ->and($response->json('data')[0]['number'])->toBe($import->number);
})->with('import data');

it('successfully lists imports with user_id filter', function () {
    $targetUser = User::factory()->create();
    $target = Import::factory()->create(['user_id' => $targetUser->id]);
    Import::factory()->create(['user_id' => User::factory()->create()->id]);

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'user_id' => $targetUser->id,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('total_records'))->toBe(1)
        ->and($response->json('data')[0]['user']['id'])->toBe($targetUser->id);
});

it('successfully lists imports with import_date filter', function () {
    $date = '2025-01-01';
    $target = Import::factory()->create(['import_date' => $date]);
    Import::factory()->create(['import_date' => '2024-01-01']);

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'import_date' => $date,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('total_records'))->toBe(1)
        ->and($response->json('data')[0]['import_date'])->toBe(Carbon::parse($date)->format(config('constants.database_date_format')));
});

it('sorts imports by direct columns', function () {
    Import::query()->delete();
    $importA = Import::factory()->create(['import_date' => '2025-01-01']);
    $importB = Import::factory()->create(['import_date' => '2025-01-02']);

    $response = $this->getJson(route($this->route, [
        'sort' => ['import_date'],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['id'])->toBe($importA->id)
        ->and($response->json('data')[1]['id'])->toBe($importB->id);
});

it('sorts imports by descending order', function () {
    Import::query()->delete();
    $importA = Import::factory()->create(['number' => 'A100']);
    $importB = Import::factory()->create(['number' => 'B200']);

    $response = $this->getJson(route($this->route, [
        'sort' => ['-number'],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['id'])->toBe($importB->id)
        ->and($response->json('data')[1]['id'])->toBe($importA->id);
});

it('fails validation for invalid filters and sorts', function () {
    $response = $this->getJson(route($this->route, [
        'filter' => [
            'id' => 'invalid',
            'user_id' => 999999999,
        ],
        'sort' => ['unsupported_column'],
    ]));

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKeys([
            'filter.id',
            'filter.user_id',
            'sort.0',
        ]);
});

it('fails to list imports without permission', function () {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->getJson(route($this->route));

    expect($response->status())->toBe(403)
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
