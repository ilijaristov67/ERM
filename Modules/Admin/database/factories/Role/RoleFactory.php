<?php

namespace Modules\Admin\Database\Factories\Role;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Admin\Models\Role\Role;

class RoleFactory extends Factory
{
    protected $model = Role::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
