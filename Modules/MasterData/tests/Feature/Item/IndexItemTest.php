<?php

use Modules\Admin\Models\User\User;
use Modules\MasterData\Database\Seeders\Permission\PermissionSeeder;
use Modules\MasterData\Models\Item\Item;
use Tymon\JWTAuth\Facades\JWTAuth;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'master-data-items-read';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.master-data.items.index';

    $this->page = 1;
    $this->limit = 15;
    $this->numberToSeed = 25;

    Item::factory()->count($this->numberToSeed)->create();
});

it('successfully lists items', function () {
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
            'code',
            'type',
            'created_at',
            'updated_at',
        ]);
});

it('successfully lists items with pagination', function () {
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

it('successfully lists items with id filter', function () {
    $item = Item::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'id' => $item->id,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['id'])->toBe($item->id)
        ->and($response->json('filter'))->toHaveKey('id')
        ->and($response->json('filter.id'))->toBe((string) $item->id);
});

it('successfully lists items with name filter', function () {
    $item = Item::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'name' => $item->name,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['name'])->toBe($item->name)
        ->and($response->json('filter'))->toHaveKey('name')
        ->and($response->json('filter.name'))->toBe($item->name);
});

it('successfully lists items with type filter', function () {
    $item = Item::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'type' => $item->type->value,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['type'])->toBe($item->type->value)
        ->and($response->json('filter'))->toHaveKey('type')
        ->and($response->json('filter.type'))->toBe($item->type->value);
});

it('successfully lists items with code filter', function () {
    $item = Item::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'code' => $item->code,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['code'])->toBe($item->code)
        ->and($response->json('filter'))->toHaveKey('code')
        ->and($response->json('filter.code'))->toBe($item->code);
});

it('successfully lists items with multiple filters', function () {
    $item = Item::query()->first();

    $response = $this->getJson(route($this->route, [
        'filter' => [
            'id' => $item->id,
            'name' => $item->name,
            'type' => $item->type,
            'code' => $item->code,
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['id'])->toBe($item->id)
        ->and($response->json('filter'))->toHaveKeys(['id', 'name', 'type', 'code']);
});

it('fails if item id doesnt exist', function () {
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
            'name' => 'non-existent-item-name',
        ],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data'))->toBeEmpty();
});

it('sorts items with name sort', function () {
    $firstItem = Item::query()->orderBy('name')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => ['name'],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['name'])->toBe($firstItem->name);
});

it('sorts items with name desc sort', function () {
    $firstItem = Item::query()->orderBy('name', 'desc')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => ['-name'],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['name'])->toBe($firstItem->name);
});

it('sorts items with code sort', function () {
    $firstItem = Item::query()->orderBy('code')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => ['code'],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['code'])->toBe($firstItem->code);
});

it('sorts items with type sort', function () {
    $firstItem = Item::query()->orderBy('type')->first();

    $response = $this->getJson(route($this->route, [
        'sort' => ['type'],
    ]));

    expect($response->status())->toBe(200)
        ->and($response->json('data')[0]['type'])->toBe($firstItem->type->value);
});

it('fails to list items without permission', function () {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->getJson(route($this->route));

    expect($response->status())->toBe(403)
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
