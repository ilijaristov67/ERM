<?php

use Modules\Admin\Database\Seeders\Permission\PermissionSeeder;
use Modules\Admin\Models\User\User;

dataset('country', [
    fn () => [
        'name' => 'some name',
        'iso_alpha_2' => '12',
        'iso_alpha_3' => '123',
        'numeric_code' => '321',
    ],
]);

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'admin-countries-create';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.admin.countries.store';
})->with('country');

it('successfully stores country', function (array $data) {
    $this->assertDatabaseCount('countries', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(200)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'id',
            'name',
            'iso_alpha_2',
            'iso_alpha_3',
            'numeric_code',
            'created_at',
            'updated_at',
        ]);

    $this->assertDatabaseCount('countries', 1);
    $this->assertDatabaseHas('countries', $data);
});

it('fails without data', function () {
    $this->assertDatabaseCount('countries', 0);

    $response = $this->postJson(route($this->route), []);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('is required')
        ->and($response->json('errors'))->toHaveKeys([
            'name',
            'iso_alpha_2',
            'iso_alpha_3',
            'numeric_code',
        ]);

    $this->assertDatabaseCount('countries', 0);
});

it('fails when iso_alpha_2 is longer than 2 chars', function (array $data) {
    $data['iso_alpha_2'] = 'ABC';

    $this->assertDatabaseCount('countries', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain(' must not be greater than 2 characters')
        ->and($response->json('errors'))->toHaveKey('iso_alpha_2');

    $this->assertDatabaseCount('countries', 0);
});

it('fails when iso_alpha_3 is longer than 3 chars', function (array $data) {
    $data['iso_alpha_3'] = 'ABCD';

    $this->assertDatabaseCount('countries', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain(' must not be greater than 3 characters')
        ->and($response->json('errors'))->toHaveKey('iso_alpha_3');

    $this->assertDatabaseCount('countries', 0);
});

it('fails when name is not unique', function (array $data) {
    $this->postJson(route($this->route), $data);

    $this->assertDatabaseCount('countries', 1);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('already been taken')
        ->and($response->json('errors'))->toHaveKey('name');

    $this->assertDatabaseCount('countries', 1);
});

it('fails when iso_alpha_2 is not unique', function (array $data) {
    $this->postJson(route($this->route), $data);

    $this->assertDatabaseCount('countries', 1);

    $data['name'] = 'another name';

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('already been taken')
        ->and($response->json('errors'))->toHaveKey('iso_alpha_2');

    $this->assertDatabaseCount('countries', 1);
});

it('fails when iso_alpha_3 is not unique', function (array $data) {
    $this->postJson(route($this->route), $data);

    $this->assertDatabaseCount('countries', 1);

    $data['name'] = 'another name';
    $data['iso_alpha_2'] = 'ZZ';

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('already been taken')
        ->and($response->json('errors'))->toHaveKey('iso_alpha_3');

    $this->assertDatabaseCount('countries', 1);
});

it('fails when numeric_code is not unique', function (array $data) {
    $this->postJson(route($this->route), $data);

    $this->assertDatabaseCount('countries', 1);

    $data['name'] = 'another name';
    $data['iso_alpha_2'] = 'ZZ';
    $data['iso_alpha_3'] = 'ZZA';

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(422)
        ->and($response->json())->toBeArray()
        ->and($response->json())->toHaveKeys([
            'message',
            'errors',
        ])
        ->and($response->json('message'))->toContain('already been taken')
        ->and($response->json('errors'))->toHaveKey('numeric_code');

    $this->assertDatabaseCount('countries', 1);
});

it('fails to store country without permission', function (array $data) {
    $this->user->revokePermissionTo($this->permission);

    $this->assertDatabaseCount('countries', 0);

    $response = $this->postJson(route($this->route), $data);

    expect($response->status())->toBe(403)
        ->and($response->json())->toHaveKey('message')
        ->and($response->json('message'))->toBe(__('User does not have the right permissions.'));
});
