<?php

namespace Modules\Admin\Tests\Feature\Authentications;

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

    dd($response->json());
});
