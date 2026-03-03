<?php

namespace Modules\Inventory\Database\Factories\InventoryQuantity;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Inventory\Models\InventoryQuantity\InventoryQuantity;
use Modules\MasterData\Models\Item\Item;
use Modules\MasterData\Models\Location\Location;

class InventoryQuantityFactory extends Factory
{
    protected $model = InventoryQuantity::class;

    public function definition(): array
    {
        return [
            'item_id' => Item::factory(),
            'location_id' => Location::factory(),
            'quantity' => (string) $this->faker->randomNumber(),
        ];
    }
}
