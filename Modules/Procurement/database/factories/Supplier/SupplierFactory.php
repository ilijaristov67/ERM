<?php

namespace Modules\Procurement\Database\Factories\Supplier;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Procurement\Models\Supplier\Supplier;

class SupplierFactory extends Factory
{
    protected $model = Supplier::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->name,
        ];
    }
}
