<?php

namespace Modules\Admin\Database\Factories\User;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Admin\Models\User\User;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->word,
            'last_name' => $this->faker->word,
            'username' => $this->faker->word,
            'phone_number' => $this->faker->phoneNumber,
            'password' => $this->faker->password,

        ];
    }
}
