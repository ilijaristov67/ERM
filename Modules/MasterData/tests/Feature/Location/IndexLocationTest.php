<?php

use Modules\Admin\Models\User\User;
use Modules\MasterData\Database\Seeders\Permission\PermissionSeeder;
use Modules\MasterData\Models\Location\Location;
use Tymon\JWTAuth\Facades\JWTAuth;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'master-data-locations-read';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.master-data.locations.index';

    $this->page = 1;
    $this->limit = 15;
    $this->numberToSeed = 25;

    Location::factory()->count($this->numberToSeed)->create();
});

it('successfully lists locations', function () {
    $response = $this->getJson(route($this->route));

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'page',
            'limit',
            'total_records',
            'total_pages',
            'filter',
            'sort',
            'data',
        ])
        ->and($response->json('total_records'))->toBe($this->numberToSeed)
        ->and($response->json('data'))->toBeArray()
        ->and($response->json('data')[0])->toHaveKeys([
            'id',
            'name',
            'type',
            'capacity',
            'is_virtual',
            'created_at',
            'updated_at',
        ]);
});

it('successfully lists locations with pagination', function () {
    $response = $this->getJson(route($this->route), [
        'page' => $this->page,
        'limit' => $this->limit,
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json())->toHaveKeys(['page', 'limit', 'total_records', 'total_pages', 'filter', 'data'])
        ->and($response->json('page'))->toBe($this->page)
        ->and($response->json('limit'))->toBe($this->limit)
        ->and($response->json('filter'))->toBe('')
        ->and($response->json('total_records'))->toBe($this->numberToSeed)
        ->and($response->json('total_pages'))->toBe((int) ceil($this->numberToSeed / $this->limit));
});

it('successfully lists locations with id filter', function () {
    $location = Location::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'id' => $location->id,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['id'])->toBe($location->id)
        ->and($response->json('filter'))->toHaveKey('id')
        ->and($response->json('filter.id'))->toBe((string) $location->id);
});

it('successfully lists locations with name filter', function () {
    $location = Location::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'name' => $location->name,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['name'])->toBe($location->name)
        ->and($response->json('filter'))->toHaveKey('name')
        ->and($response->json('filter.name'))->toBe($location->name);
});

it('successfully lists locations with type filter', function () {
    $location = Location::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'type' => $location->type->value,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['type'])->toBe($location->type->value)
        ->and($response->json('filter'))->toHaveKey('type')
        ->and($response->json('filter.type'))->toBe($location->type->value);
});

it('successfully lists locations with is_virtual filter', function () {
    $location = Location::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'is_virtual' => $location->is_virtual,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['is_virtual'])->toBe($location->is_virtual)
        ->and($response->json('filter'))->toHaveKey('is_virtual');
});

it('successfully lists locations with multiple filters', function () {
    $location = Location::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'id' => $location->id,
            'name' => $location->name,
            'type' => $location->type,
            'capacity' => (string) $location->capacity,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['id'])->toBe($location->id)
        ->and($response->json('filter'))->toHaveKeys(['id', 'name', 'type', 'capacity']);
});

it('fails if location id doesnt exist', function () {
    $response = $this->getJson(route($this->route, [
        'filter' => [
            'id' => 99999,
        ],
    ]));

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('filter.id');
});

it('returns empty array if filter name doesnt exist', function () {
    $response = $this->getJson(route($this->route, [
        'filter' => [
            'name' => 'non-existent-location-name',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data'))->toBeEmpty();
});

it('sorts locations with name sort', function () {
    $firstLocation = Location::query()->orderBy('name')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => ['name'],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['name'])->toBe($firstLocation->name);
});

it('sorts locations with name desc sort', function () {
    $firstLocation = Location::query()->orderBy('name', 'desc')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => ['-name'],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['name'])->toBe($firstLocation->name);
});

it('sorts locations with type sort', function () {
    $firstLocation = Location::query()->orderBy('type')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => ['type'],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['type'])->toBe($firstLocation->type->value);
});

it('sorts locations with capacity sort', function () {
    $firstLocation = Location::query()->orderBy('capacity')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => ['capacity'],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['capacity'])->toBe($firstLocation->capacity);
});

it('sorts locations with is_virtual sort', function () {
    $firstLocation = Location::query()->orderBy('is_virtual')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => ['is_virtual'],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['is_virtual'])->toBe($firstLocation->is_virtual);
});

it('fails to list locations without permission', function () {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->getJson(route($this->route));

    expect($response->status())->toBe(403)
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
