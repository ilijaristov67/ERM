<?php

namespace Modules\Admin\Database\Factories\Country;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Admin\Models\Country\Country;

class CountryFactory extends Factory
{
    protected $model = Country::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->country,
            'iso_alpha_2' => $this->faker->unique()->countryCode(),
            'iso_alpha_3' => $this->faker->unique()->countryISOAlpha3(),
            'numeric_code' => $this->faker->unique()->countryCode(),
        ];
    }
}
