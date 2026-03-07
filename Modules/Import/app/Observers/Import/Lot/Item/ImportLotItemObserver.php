<?php

namespace Modules\Import\Observers\Import\Lot\Item;

use Modules\Import\Models\Import\Lot\Item\ImportLotItem;
use Modules\Inventory\Models\InventoryQuantity\InventoryQuantity;

class ImportLotItemObserver
{
    public function created(ImportLotItem $importLotItem): void
    {
        $inventoryQuantity = InventoryQuantity::firstOrCreate([
            'item_id' => $importLotItem->item_id,
            'location_id' => $importLotItem->importLot->location_id
        ],
        [
            'quantity' => 0,
        ]);

        $inventoryQuantity->increment('quantity', $importLotItem->quantity);
    }
}
