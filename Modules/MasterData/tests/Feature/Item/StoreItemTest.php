<?php

use Modules\Admin\Models\User\User;
use Modules\MasterData\Database\Seeders\Permission\PermissionSeeder;
use Modules\MasterData\Enums\Item\ItemTypeEnum;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'master-data-items-create';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->routeName = 'api.master-data.items.store';
});

dataset('item-data', [
    fn () => [
        'name' => 'chair',
        'type' => ItemTypeEnum::RAW_MATERIAL,

    ],
]);

it('successfully stores item', function (array $data) {
    //    $this->assertDatabaseCount('items', 0);

    $response = $this->postJson(route($this->routeName, $data));

    dd($response->json());
})->with('item-data');
