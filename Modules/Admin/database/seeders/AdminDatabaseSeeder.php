<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Admin\Database\Seeders\Country\CountrySeeder;
use Modules\Admin\Database\Seeders\Permission\PermissionSeeder;
use Modules\Admin\Database\Seeders\Role\RoleSeeder;
use Modules\Admin\Database\Seeders\User\UserSeeder;

class AdminDatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            CountrySeeder::class,
        ]);
    }
}
