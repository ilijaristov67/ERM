<?php

namespace Modules\Import\Database\Factories\Import\Lot;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Admin\Models\User\User;
use Modules\Import\Models\Import\Import;
use Modules\Import\Models\Import\Lot\ImportLot;
use Modules\MasterData\Models\Location\Location;

class ImportLotFactory extends Factory
{
    protected $model = ImportLot::class;

    public function definition(): array
    {
        return [
            'import_id' => Import::factory(),
            'location_id' => Location::factory(),
            'arrived_at' => $this->faker->dateTime(),
            'user_id' => User::factory(),
        ];
    }
}
