<?php

use Modules\Admin\Database\Seeders\Permission\PermissionSeeder;
use Modules\Admin\Models\Company\Company;
use Modules\Admin\Models\User\User;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'admin-companies-delete';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer ' . $this->token);

    $this->routeName = 'api.admin.companies.delete';
    $this->company = Company::factory()->create();
});

it('successfully deletes company', function () {
   $response = $this->deleteJson(route($this->routeName, $this->company));

    expect($response->status())->toBe(200)
        ->and($response->json())->toHaveKeys(['message', 'code'])
        ->and($response->json('message'))->toBe(__('Successfully deleted', [
            'entity' => __('entities.company'),
        ]))
        ->and($response->json('code'))->toBe(200);

    $this->assertSoftDeleted('companies', ['id' => $this->company->id]);
});

it('fails to delete company that doesnt exist', function () {
    $response = $this->deleteJson(route($this->routeName, 99999));

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');
});

it('fails to delete company without permission', function () {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->deleteJson(route($this->routeName, $this->company));

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
