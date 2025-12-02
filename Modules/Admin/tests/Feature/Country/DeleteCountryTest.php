<?php

use Modules\Admin\Database\Seeders\Permission\PermissionSeeder;
use Modules\Admin\Models\Country\Country;
use Modules\Admin\Models\User\User;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'admin-countries-delete';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.admin.countries.delete';

    $this->country = Country::factory()->create();
});

it('successfully deletes country', function () {
    $response = $this->deleteJson(route($this->route, $this->country));

    expect($response->status())->toBe(200)
        ->and($response->json())->toHaveKeys(['message', 'code'])
        ->and($response->json('message'))->toBe(__('Successfully deleted', [
            'entity' => __('entities.country'),
        ]))
        ->and($response->json('code'))->toBe(200);

    $this->assertSoftDeleted('countries', ['id' => $this->country->id]);
});

it('fails to delete country that doesnt exist', function () {
    $response = $this->deleteJson(route($this->route, 99999));

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');
});

it('fails to delete country without permission', function () {
    $this->user->revokePermissionTo($this->permission);

    $response = $this->deleteJson(route($this->route, $this->country));

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
