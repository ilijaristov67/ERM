<?php

namespace Modules\MasterData\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\MasterData\Database\Seeders\Permission\PermissionSeeder;

class MasterDataDatabaseSeeder extends Seeder
{
    public function run(): void
    {
         $this->call([
             PermissionSeeder::class,
         ]);
    }
}
