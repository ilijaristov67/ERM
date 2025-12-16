<?php

namespace Modules\MasterData\Database\Factories\Item;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\MasterData\Models\Item\Item;

class ItemFactory extends Factory
{
    protected $model = Item::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
        ];
    }
}
