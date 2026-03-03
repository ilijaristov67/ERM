<?php

namespace Modules\Admin\Database\Seeders\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\Models\User\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['username' => 'super_admin'],
            [
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'phone_number' => '0123456789',
                'password' => Hash::make('password'),
            ]
        );

        $user->assignRole(config('admin.super_admin_role'));
    }
}
