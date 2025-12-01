<?php

use Modules\Admin\Database\Seeders\Permission\PermissionSeeder;
use Modules\Admin\Models\Company\Company;
use Modules\Admin\Models\User\User;

dataset('company', [
    fn () => [
        'name' => 'updated name',
        'email' => 'updated@company.com',
        'phone' => '87654321',
    ]]);


beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'admin-companies-update';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer ' . $this->token);

    $this->routeName = 'api.admin.companies.patch';
    $this->company = Company::factory()->create([
        'name' => 'name',
        'email' => 'email@company.com',
        'phone' => '12345678',
    ]);
})->with('company');

it('successfully patches company', function (array $data) {
   $this->assertDatabaseHas('companies', [
       'id' => $this->company->id,
       'name' => 'name',
       'email' => 'email@company.com',
       'phone' => '12345678',
   ]);

   $response = $this->patchJson(route($this->routeName, $this->company), $data);

   expect($response->status())->toBe(200)
   ->and($response->json())->toBeArray()
       ->and($response->json())->toHaveKeys([
           'id',
           'name',
           'email',
           'phone',
           'created_at',
           'updated_at',
       ])
       ->and($response->json('id'))->toBe($this->company->id);

    $this->assertDatabaseMissing('companies', [
        'id' => $this->company->id,
        'name' => 'name',
        'email' => 'email@company.com',
        'phone' => '12345678',
    ]);

    $this->assertDatabaseHas('companies', [
        'id' => $this->company->id,
        'name' => 'updated name',
        'email' => 'updated@company.com',
        'phone' => '87654321',
    ]);
});

it('fails to patch company without data', function () {
    $this->assertDatabaseHas('companies', [
        'id' => $this->company->id,
        'name' => 'name',
        'email' => 'email@company.com',
        'phone' => '12345678',
    ]);

    $response = $this->patchJson(route($this->routeName, $this->company), []);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('required')
        ->and($response->json('errors'))->toHaveKeys([
            'name',
            'email',
            'phone',
        ])
        ->and($response->json('errors'))->toHaveKeys([
            'name',
            'email',
            'phone'
        ]);

    $this->assertDatabaseHas('companies', [
        'id' => $this->company->id,
        'name' => 'name',
        'email' => 'email@company.com',
        'phone' => '12345678',
    ]);
});

it('fails to update company if email and phone are not unique', function (array $data) {
    $newCompany = Company::factory()->create([
        'name' => 'updated name',
        'email' => 'updated@company.com',
        'phone' => '87654321',
    ]);

    $response = $this->patchJson(route($this->routeName, $this->company), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('already been taken')
        ->and($response->json('errors'))->toHaveKeys([
            'email',
            'phone',
        ]);
});

it('successfully updates same values for existing record', function (array $data) {
   $data['name']  = 'name';
   $data['email'] =  'email@company.com';
   $data['phone'] =  '12345678';

   $response = $this->patchJson(route($this->routeName, $this->company), $data);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'id',
            'name',
            'email',
            'phone',
            'created_at',
            'updated_at',
        ])
        ->and($response->json('id'))->toBe($this->company->id);

    $this->assertDatabaseHas('companies', [
        'id' => $this->company->id,
        'name' => 'name',
        'email' => 'email@company.com',
        'phone' => '12345678',
    ]);
});

it('fails to patch company without permission', function (array $data) {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->patchJson(route($this->routeName, $this->company), $data);

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});

it('fails to  patch company that doesnt exist', function () {
    $response = $this->patch(route($this->routeName, 99999));

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');
});
