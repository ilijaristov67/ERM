<?php

namespace Modules\Admin\Tests\Feature\Authentications;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\Models\Permission\Permission;
use Modules\Admin\Models\User\User;
use Spatie\Permission\Models\Role;

beforeEach(function () {
    $this->superAdminRole = Role::firstOrCreate(['name' => 'Super Admin']);
    $this->userRole = Role::firstOrCreate(['name' => 'User']);

    $this->directPermission = Permission::factory()->create(['name' => 'direct']);
    $this->permission = Permission::factory()->create(['name' => 'role']);
    $this->permission1 = Permission::factory()->create(['name' => 'super admin direct']);

    $this->routeName = 'api.admin.users.login';

    $this->userRole->permissions()->sync([$this->permission->id]);
    $this->user = User::factory()->create([
        'username' => 'user',
        'password' => Hash::make('password'),
    ]);

    $this->user->permissions()->sync([$this->directPermission->id]);
    $this->user->assignRole($this->userRole);
});

it('logins user', function () {
    $response = $this->postJson(route($this->routeName), [
        'username' => 'user',
        'password' => 'password',
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json())
        ->toHaveKeys(['access_token', 'expires_at', 'user'])
        ->and($response->json('expires_at'))->toBeString()->and(fn ($date) => expect(Carbon::parse($date))->toBeInstanceOf(Carbon::class))
        ->and($response->json('user'))->toHaveKeys(['id', 'first_name', 'last_name', 'username', 'phone_number',
            'roles', 'direct_permissions'])
        ->and($response->json('user')['roles'])->toBeArray()->and($response->json('user')['roles'][0])
        ->toHaveKeys(['id', 'name', 'permissions'])
        ->and($response->json('user')['roles'][0]['permissions'])->toBeArray()
        ->and($response->json('user')['roles'][0]['permissions'][0]['name'])->toBe('role')
        ->and($response->json('user')['direct_permissions'])->toBeArray()
        ->and($response->json('user')['direct_permissions'][0])->toHaveKeys(['id', 'name'])
        ->and($response->json('user')['direct_permissions'][0]['name'])->toBe('direct');
});

it('successfully logs in with valid credentials and super admin gets all permissions', function () {
    $this->user->removeRole($this->userRole);
    $this->user->permissions()->sync([$this->permission1->id]);
    $this->user->assignRole($this->superAdminRole);

    $response = $this->postJson(route($this->routeName), [
        'username' => 'user',
        'password' => 'password',
    ]);

    expect($response->status())->toBe(200)
        ->and($response->json())
        ->toHaveKeys(['access_token', 'expires_at', 'user'])
        ->and($response->json('expires_at'))->toBeString()->and(fn ($date) => expect(Carbon::parse($date))->toBeInstanceOf(Carbon::class))
        ->and($response->json('user'))->toHaveKeys(['id', 'first_name', 'last_name', 'username', 'phone_number',
            'roles', 'direct_permissions'])
        ->and($response->json('user')['roles'])->toBeArray()->and($response->json('user')['roles'][0])
        ->toHaveKeys(['id', 'name', 'permissions'])
        ->and($response->json('user')['roles'][0]['permissions'])->toBeArray()->toHaveCount(3)
        ->and($response->json('user')['roles'][0]['permissions'][0]['name'])->toBe('direct')
        ->and($response->json('user')['roles'][0]['permissions'][1]['name'])->toBe('role')
        ->and($response->json('user')['roles'][0]['permissions'][2]['name'])->toBe('super admin direct')
        ->and($response->json('user')['direct_permissions'])->toBeArray()
        ->and($response->json('user')['direct_permissions'][0]['name'])->toBe('super admin direct');
});

it('fails to log in with invalid credentials', function () {
    $response = $this->postJson(route($this->routeName), [
        'username' => 'use12r',
        'password' => 'password1',
    ]);

    expect($response->status())
        ->toBe(400)
        ->and($response->json('message'))->toBe(__('Wrong credentials.'));
});
