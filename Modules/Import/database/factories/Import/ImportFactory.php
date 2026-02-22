<?php

namespace Modules\Import\Database\Factories\Import;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Admin\Models\User\User;
use Modules\Import\Http\Import;
use Modules\MasterData\Models\Invoice\Invoice;
use Modules\Procurement\Models\Supplier\Supplier;

class ImportFactory extends Factory
{
    protected $model = Import::class;

    public function definition(): array
    {
        return [
            'number' => $this->faker->unique()->numberBetween(1, 100),
            'user_id' => User::factory(),
            'import_date' => $this->faker->date(),
            'supplier_id' => Supplier::factory(),
            'invoice_id' => Invoice::factory(),
        ];
    }
}
