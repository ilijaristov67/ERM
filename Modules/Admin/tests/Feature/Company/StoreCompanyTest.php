<?php

use Modules\Admin\Database\Seeders\Permission\PermissionSeeder;
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
