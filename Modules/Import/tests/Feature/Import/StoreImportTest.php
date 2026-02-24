<?php

use Modules\Admin\Models\User\User;
use Modules\Import\Database\Seeders\Permission\PermissionSeeder;
use Modules\MasterData\Models\Invoice\Invoice;
use Modules\Procurement\Models\Supplier\Supplier;


beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'import-create';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.import.store';
});

dataset('import data', [
    fn () => [
        'import_date' => '12-12-2025',
        'supplier_id' => Supplier::factory()->create()->id,
        'invoice_id' => Invoice::factory()->create()->id,
    ],
]);


it('can store import', function (array $data) {
   $response = $this->postJson(route($this->route), $data);

   dd($response->json());
})->with('import data');
