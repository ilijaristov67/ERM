<?php

namespace Modules\Import\Database\Factories\Import\Lot\Item;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Import\Models\Import\Lot\ImportLot;
use Modules\Import\Models\Import\Lot\Item\ImportLotItem;
use Modules\MasterData\Models\Item\Item;

class ImportLotItemFactory extends Factory
{
    protected $model = ImportLotItem::class;

    public function definition(): array
    {
        return [
        'import_lot_id' => ImportLot::factory(),
            'item_id' => Item::factory(),
            'quantity' => (string) $this->faker->numberBetween(1, 100),
        ];
    }
}
