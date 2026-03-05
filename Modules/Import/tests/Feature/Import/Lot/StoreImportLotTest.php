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
        'import_id' => $this->import->id,
        'location_id' => Location::factory()->create()->id,
        'user_id' => $this->user->id,
    ],
]);

it('successfully stores import lots', function (array $data) {
    $this->assertDatabaseCount('import_lots', 0);

    $response = $this->postJson(route($this->route, $this->import), $data);

    dd($response->json());
})->with('import lot data');
