<?php

use Modules\Admin\Models\User\User;
use Modules\Import\Database\Seeders\Permission\PermissionSeeder;
use Modules\Import\Models\Import\Import;
use Modules\Import\Models\Import\Lot\ImportLot;
use Modules\MasterData\Models\Item\Item;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'import-lot-items-create';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.import.lots.items.store';

    $this->import = Import::factory()->create();
    $this->importLot = ImportLot::factory()->for($this->import)->create();

    $this->item = Item::factory()->create();
});

it('successfully store import lot item', function () {
   $response = $this->postJson(route($this->route, [
       $this->import,
       $this->importLot,
   ]), [
       'item_id' => $this->item->id,
       'quantity' => 1,
   ]);

   dd($response->json());
});
