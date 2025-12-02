<?php

use Modules\Admin\Database\Seeders\Permission\PermissionSeeder;
use Modules\Admin\Models\Country\Country;
use Modules\Admin\Models\User\User;
use Tymon\JWTAuth\Facades\JWTAuth;

dataset('country', [
    fn () => [
        'name' => 'name updated',
        'iso_alpha_2' => '21',
        'iso_alpha_3' => '321',
        'numeric_code' => '22',
    ],
]);

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'admin-countries-update';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.admin.countries.patch';

    $this->country = Country::factory()->create([
        'name' => 'name',
        'iso_alpha_2' => '12',
        'iso_alpha_3' => '123',
        'numeric_code' => '11',
    ]);
})->with('country');

it('successfully patches only name', function (array $data) {
    $this->assertDatabaseHas('countries', [
        'id' => $this->country->id,
        'name' => 'name',
    ]);

    $response = $this->patchJson(route($this->route, $this->country), [
        'name' => $data['name'],
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json('name'))->toBe($data['name']);

    $this->assertDatabaseHas('countries', [
        'id' => $this->country->id,
        'name' => $data['name'],
    ]);
});

it('successfully patches only iso_alpha_2', function (array $data) {
    $this->assertDatabaseHas('countries', [
        'id' => $this->country->id,
        'iso_alpha_2' => '12',
    ]);

    $response = $this->patchJson(route($this->route, $this->country), [
        'iso_alpha_2' => $data['iso_alpha_2'],
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json('iso_alpha_2'))->toBe($data['iso_alpha_2']);

    $this->assertDatabaseHas('countries', [
        'id' => $this->country->id,
        'iso_alpha_2' => $data['iso_alpha_2'],
    ]);
});

it('successfully patches only iso_alpha_3', function (array $data) {
    $this->assertDatabaseHas('countries', [
        'id' => $this->country->id,
        'iso_alpha_3' => '123',
    ]);

    $response = $this->patchJson(route($this->route, $this->country), [
        'iso_alpha_3' => $data['iso_alpha_3'],
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json('iso_alpha_3'))->toBe($data['iso_alpha_3']);

    $this->assertDatabaseHas('countries', [
        'id' => $this->country->id,
        'iso_alpha_3' => $data['iso_alpha_3'],
    ]);
});

it('successfully patches only numeric_code', function (array $data) {
    $this->assertDatabaseHas('countries', [
        'id' => $this->country->id,
        'numeric_code' => '11',
    ]);

    $response = $this->patchJson(route($this->route, $this->country), [
        'numeric_code' => $data['numeric_code'],
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json('numeric_code'))->toBe($data['numeric_code']);

    $this->assertDatabaseHas('countries', [
        'id' => $this->country->id,
        'numeric_code' => $data['numeric_code'],
    ]);
});

it('fails when name is not unique', function (array $data) {
    Country::factory()->create(['name' => $data['name']]);

    $this->assertDatabaseHas('countries', [
        'name' => $data['name'],
    ]);

    $response = $this->patchJson(route($this->route, $this->country), [
        'name' => $data['name'],
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('name');
});

it('fails when iso_alpha_2 is not unique', function (array $data) {
    Country::factory()->create(['iso_alpha_2' => $data['iso_alpha_2']]);

    $this->assertDatabaseHas('countries', [
        'iso_alpha_2' => $data['iso_alpha_2'],
    ]);

    $response = $this->patchJson(route($this->route, $this->country), [
        'iso_alpha_2' => $data['iso_alpha_2'],
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('iso_alpha_2');
});

it('fails when iso_alpha_3 is not unique', function (array $data) {
    Country::factory()->create(['iso_alpha_3' => $data['iso_alpha_3']]);

    $this->assertDatabaseHas('countries', [
        'iso_alpha_3' => $data['iso_alpha_3'],
    ]);

    $response = $this->patchJson(route($this->route, $this->country), [
        'iso_alpha_3' => $data['iso_alpha_3'],
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('iso_alpha_3');
});

it('fails when numeric_code is not unique', function (array $data) {
    Country::factory()->create(['numeric_code' => $data['numeric_code']]);

    $this->assertDatabaseHas('countries', [
        'numeric_code' => $data['numeric_code'],
    ]);

    $response = $this->patchJson(route($this->route, $this->country), [
        'numeric_code' => $data['numeric_code'],
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('numeric_code');
});

it('fails when iso_alpha_2 exceeds length', function () {
    $this->assertDatabaseHas('countries', [
        'id' => $this->country->id,
    ]);

    $response = $this->patchJson(route($this->route, $this->country), [
        'iso_alpha_2' => 'abc',
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('iso_alpha_2');
});

it('fails when iso_alpha_3 exceeds length', function () {
    $this->assertDatabaseHas('countries', [
        'id' => $this->country->id,
    ]);

    $response = $this->patchJson(route($this->route, $this->country), [
        'iso_alpha_3' => 'abcd',
    ]);

    expect($response->status())->toBe(422)
        ->and($response->json('errors'))->toHaveKey('iso_alpha_3');
});

it('fails to patch non-existent country', function () {
    $response = $this->patchJson(route($this->route, 999999), [
        'name' => 'test',
    ]);

    expect($response->status())->toBe(404)
        ->and($response->json('error'))->toBe('Not found');
});

it('fails to patch country without permission', function (array $data) {
    $this->user->revokePermissionTo($this->permission);

    $this->assertDatabaseHas('countries', [
        'id' => $this->country->id,
    ]);

    $response = $this->patchJson(route($this->route, $this->country), $data);

    expect($response->status())->toBe(403)
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
