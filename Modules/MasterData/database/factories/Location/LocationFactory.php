<?php

namespace Modules\MasterData\Database\Factories\Location;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\MasterData\Enums\Location\LocationTypeEnum;
use Modules\MasterData\Models\Location\Location;

class LocationFactory extends Factory
{
    protected $model = Location::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->randomElement(LocationTypeEnum::values()),
            'capacity' => (string) $this->faker->randomNumber(),
            'is_virtual' => $this->faker->boolean(),
        ];
    }
}
