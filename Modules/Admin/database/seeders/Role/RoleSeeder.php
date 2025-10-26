<?php

namespace Modules\Admin\Database\Seeders\Role;

use Illuminate\Database\Seeder;
use Modules\Admin\Models\Role\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::firstOrCreate([
            'name' => 'Super Admin',
            'guard_name' => 'api',
        ]);
    }
}
