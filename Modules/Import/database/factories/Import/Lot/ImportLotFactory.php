<?php

namespace Modules\Import\Database\Factories\Import\Lot;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Import\Models\Import\Import;
use Modules\Import\Models\Import\Lot\ImportLot;

class ImportLotFactory extends Factory
{
    protected $model = ImportLot::class;

    public function definition(): array
    {
        return [
         'import_id' => Import::factory(),
          ''
        ];
    }
}
