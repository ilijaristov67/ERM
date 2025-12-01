<?php

use Modules\Admin\Database\Seeders\Permission\PermissionSeeder;
use Modules\Admin\Models\Company\Company;
use Modules\Admin\Models\User\User;

dataset('company', [
    fn () => [
        'name' => 'company name',
        'email' => 'company@company.com',
        'phone' => '12345678',
]]);


beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'admin-companies-create';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer ' . $this->token);

    $this->routeName = 'api.admin.companies.store';
});

it('successfully stores company', function (array $data) {
    $this->assertDatabaseCount('companies', 0);
    $this->assertDatabaseMissing('companies', $data);

    $response = $this->postJson(route($this->routeName), $data);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'id',
            'name',
            'email',
            'phone',
            'created_at',
            'updated_at',
        ]);

    $this->assertDatabaseCount('companies', 1);
    $this->assertDatabaseHas('companies', $data);
})->with('company');

it('fails to store company without data', function () {
    $this->assertDatabaseCount('companies', 0);

    $response = $this->postJson(route($this->routeName), []);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('is required')
        ->and($response->json('errors'))->toHaveKeys([
            'name',
            'email',
            'phone',
        ]);
    $this->assertDatabaseCount('companies', 0);
});

it('fails to store company if email and phone are not unique', function (array $data) {
    $company = Company::factory()->create([
        'email' => 'company@company.com',
        'phone' => '12345678',
    ]);

    $this->assertDatabaseCount('companies', 1);

    $response = $this->postJson(route($this->routeName), $data);

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

    $this->assertDatabaseCount('companies', 1);
})->with('company');

it('fails to store company without permission', function (array $data) {
    $this->user->revokePermissionTo($this->permission);

    $this->assertDatabaseCount('companies', 0);

    $response = $this->postJson(route($this->routeName), $data);

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
})->with('company');
