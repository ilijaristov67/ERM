<?php

namespace Modules\Inventory\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Inventory\Models\InventoryMovement\InventoryMovement;

interface SourceInterface
{
    /** @return MorphMany<InventoryMovement, covariant Model> */
    public function inventoryMovements(): MorphMany;
}
