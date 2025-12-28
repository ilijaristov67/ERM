<?php

namespace Modules\Procurement\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Procurement\Database\Seeders\Permission\PermissionSeeder;

class ProcurementDatabaseSeeder extends Seeder
{
    public function run(): void
    {
         $this->call([
             PermissionSeeder::class,
         ]);
    }
}
