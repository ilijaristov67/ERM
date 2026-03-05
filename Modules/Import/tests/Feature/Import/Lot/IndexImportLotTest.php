<?php

use Modules\Admin\Models\User\User;
use Modules\Import\Database\Seeders\Permission\PermissionSeeder;
use Modules\Import\Models\Import\Import;
use Modules\Import\Models\Import\Lot\ImportLot;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'import-lots-read';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.import.lots.read';
    $this->numToSeed = 25;
    $this->page = 1;
    $this->limit = 15;

    $this->import = Import::factory()->create();
});

dataset('import data', [
    fn () => ImportLot::factory()->count($this->numToSeed)->create([
        'import_id' => $this->import->id,
    ]),
]);
