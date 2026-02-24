<?php

use Carbon\Carbon;
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
    $this->assertDatabaseCount('imports', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(200)
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
        ]);

    $this->assertDatabaseCount('imports', 1);
    $this->assertDatabaseHas('imports', [
        'id' => $response->json('id'),
        'number' => $response->json('number'),
        'user_id' => auth()->user()->id,
        'import_date' => Carbon::parse($data['import_date'])->format(config('constants.database_date_format')),
        'supplier_id' => $data['supplier_id'],
        'invoice_id' => $data['invoice_id'],
    ]);
})->with('import data');

it('fails to store import with empty request', function () {
    $this->assertDatabaseCount('imports', 0);

    $response = $this->postJson(route($this->route), []);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toBe('The import date field is required. (and 2 more errors)')
        ->and($response->json('errors'))->toHaveKeys([
            'import_date',
            'supplier_id',
            'invoice_id',
        ])
        ->and($response->json('errors')['import_date'][0])->toContain('required')
        ->and($response->json('errors')['supplier_id'][0])->toContain('required')
        ->and($response->json('errors')['invoice_id'][0])->toContain('required');
});

it('fails to store import if import date is after today', function (array $data) {
    $this->assertDatabaseCount('imports', 0);

    $data['import_date'] = '12-12-2030';

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toBe('The import date field must be a date before or equal to today.')
        ->and($response->json('errors'))->toHaveKeys([
            'import_date',
        ])
        ->and($response->json('errors')['import_date'][0])->toContain('before or equal to today.');
})->with('import data');

it('fails to store import with invalid id types', function (array $data) {
    $this->assertDatabaseCount('imports', 0);

    $data['supplier_id'] = 'invalid';
    $data['invoice_id'] = 'invalid';

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKeys(['supplier_id', 'invoice_id'])
        ->and($response->json('errors')['supplier_id'][0])->toContain('must be an integer')
        ->and($response->json('errors')['invoice_id'][0])->toContain('must be an integer');
})->with('import data');

it('fails to store import with non existent ids', function (array $data) {
    $this->assertDatabaseCount('imports', 0);

    $data['supplier_id'] = 999999999;
    $data['invoice_id'] = 999999999;

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKeys(['supplier_id', 'invoice_id'])
        ->and($response->json('errors')['supplier_id'][0])->toContain('invalid')
        ->and($response->json('errors')['invoice_id'][0])->toContain('invalid');
})->with('import data');

it('fails to store import without permission', function (array $data) {
    $this->user->revokePermissionTo($this->permission);

    $this->assertDatabaseCount('imports', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));

    $this->assertDatabaseCount('imports', 0);
})->with('import data');
