<?php

namespace Modules\Admin\Database\Factories\Company;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Admin\Models\Company\Company;

class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'address' => $this->faker->unique()->streetAddress,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
