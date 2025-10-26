<?php

namespace Modules\Admin\Database\Factories\Permission;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Admin\Models\Permission\Permission;

class PermissionFactory extends Factory
{
    protected $model = Permission::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'guard_name' => 'api',
        ];
    }
}
