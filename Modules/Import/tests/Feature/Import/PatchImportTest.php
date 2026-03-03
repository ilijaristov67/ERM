<?php

use Carbon\Carbon;
use Modules\Admin\Models\User\User;
use Modules\Import\Database\Seeders\Permission\PermissionSeeder;
use Modules\Import\Models\Import\Import;
use Modules\MasterData\Models\Invoice\Invoice;
use Modules\Procurement\Models\Supplier\Supplier;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'import-update';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.import.patch';

    $this->import = Import::factory()->create([
        'import_date' => '12-12-2024',
    ]);
});

dataset('import data', [
    fn () => [
        'import_date' => '12-12-2025',
        'supplier_id' => Supplier::factory()->create()->id,
        'invoice_id' => Invoice::factory()->create()->id,
    ],
]);

it('can update import', function (array $data) {
    $this->assertDatabaseHas('imports', [
        'id' => $this->import->id,
        'import_date' => Carbon::parse('12-12-2024')->format(config('constants.database_date_format')),
        'supplier_id' => $this->import->supplier_id,
        'invoice_id' => $this->import->invoice_id,
    ]);

    $response = $this->patchJson(route($this->route, $this->import->id), $data);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'id',
            'number',
            'user',
            'import_date',
            'supplier',
            'invoice',
            'created_at',
            'updated_at',
        ])
        ->and($response->json('id'))->toBe($this->import->id)
        ->and($response->json('import_date'))->toBe(Carbon::parse($data['import_date'])->format(config('constants.database_date_format')))
        ->and($response->json('supplier')['id'])->toBe($data['supplier_id'])
        ->and($response->json('invoice')['id'])->toBe($data['invoice_id']);

    $this->assertDatabaseHas('imports', [
        'id' => $this->import->id,
        'import_date' => Carbon::parse($data['import_date'])->format(config('constants.database_date_format')),
        'supplier_id' => $data['supplier_id'],
        'invoice_id' => $data['invoice_id'],
    ]);

    $this->assertDatabaseMissing('imports', [
        'id' => $this->import->id,
        'import_date' => Carbon::parse('12-12-2024')->format(config('constants.database_date_format')),
        'supplier_id' => $this->import->supplier_id,
        'invoice_id' => $this->import->invoice_id,
    ]);
})->with('import data');

it('fails to update import with invalid id types', function (array $data) {
    $this->assertDatabaseHas('imports', [
        'id' => $this->import->id,
        'import_date' => Carbon::parse('12-12-2024')->format(config('constants.database_date_format')),
    ]);

    $data['supplier_id'] = 'invalid';
    $data['invoice_id'] = 'invalid';

    $response = $this->patchJson(route($this->route, $this->import->id), $data);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKeys(['supplier_id', 'invoice_id'])
        ->and($response->json('errors')['supplier_id'][0])->toContain('must be an integer')
        ->and($response->json('errors')['invoice_id'][0])->toContain('must be an integer');

    $this->assertDatabaseHas('imports', [
        'id' => $this->import->id,
        'import_date' => Carbon::parse('12-12-2024')->format(config('constants.database_date_format')),
    ]);
})->with('import data');

it('fails to update import with non existent ids', function (array $data) {
    $this->assertDatabaseHas('imports', [
        'id' => $this->import->id,
        'import_date' => Carbon::parse('12-12-2024')->format(config('constants.database_date_format')),
    ]);

    $data['supplier_id'] = 999999999;
    $data['invoice_id'] = 999999999;

    $response = $this->patchJson(route($this->route, $this->import->id), $data);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKeys(['supplier_id', 'invoice_id'])
        ->and($response->json('errors')['supplier_id'][0])->toContain('invalid')
        ->and($response->json('errors')['invoice_id'][0])->toContain('invalid');

    $this->assertDatabaseHas('imports', [
        'id' => $this->import->id,
        'import_date' => Carbon::parse('12-12-2024')->format(config('constants.database_date_format')),
    ]);
})->with('import data');

it('fails to update import with empty request', function () {
    $this->assertDatabaseHas('imports', [
        'id' => $this->import->id,
        'import_date' => Carbon::parse('12-12-2024')->format(config('constants.database_date_format')),
    ]);

    $response = $this->patchJson(route($this->route, $this->import->id), []);

    expect($response->status())->toBe(422)
        ->and($response->json('message'))->toContain('The import date field is required when none of supplier id / invoice id are present. (and 2 more errors)')
        ->and($response->json('errors'))->toHaveKeys([
            'import_date',
            'supplier_id',
            'invoice_id',
        ])
        ->and($response->json('errors')['import_date'][0])->toContain('required')
        ->and($response->json('errors')['supplier_id'][0])->toContain('required')
        ->and($response->json('errors')['invoice_id'][0])->toContain('required');

    $this->assertDatabaseHas('imports', [
        'id' => $this->import->id,
        'import_date' => Carbon::parse('12-12-2024')->format(config('constants.database_date_format')),
        'supplier_id' => $this->import->supplier_id,
        'invoice_id' => $this->import->invoice_id,
    ]);
});

it('fails to update import if import date is after today', function (array $data) {
    $this->assertDatabaseHas('imports', [
        'id' => $this->import->id,
        'import_date' => Carbon::parse('12-12-2024')->format(config('constants.database_date_format')),
    ]);

    $data['import_date'] = '12-12-2030';

    $response = $this->patchJson(route($this->route, $this->import->id), $data);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('import_date')
        ->and($response->json('errors')['import_date'][0])->toContain('before or equal to today.');

    $this->assertDatabaseHas('imports', [
        'id' => $this->import->id,
        'import_date' => Carbon::parse('12-12-2024')->format(config('constants.database_date_format')),
    ]);
})->with('import data');

it('fails to update import if import does not exist', function (array $data) {
    $response = $this->patchJson(route($this->route, 9999999), $data);

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');
})->with('import data');

it('fails to patch import without permission', function (array $data) {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->patchJson(route($this->route, $this->import), $data);

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
})->with('import data');
