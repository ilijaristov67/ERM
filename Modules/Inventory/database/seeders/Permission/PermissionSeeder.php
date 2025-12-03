<?php

namespace Modules\Inventory\Database\Seeders\Permission;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    public const string MODULE_NAME = 'product';

    public const string GUARD_NAME = 'api';

    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        collect(['-create', '-update', '-read', '-delete'])
            ->crossJoin(collect([
                '-products',
            ]))
            ->map(function ($crudPermission) {
                return static::MODULE_NAME.$crudPermission[1].$crudPermission[0];
            })->each(function (string $permission) {
                Permission::firstOrCreate(['name' => $permission], ['guard_name' => self::GUARD_NAME]);
            });
    }
}
