<?php

namespace Modules\Inventory\Database\Factories\Product;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Inventory\Models\Product\Product;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word,
        ];
    }
}
