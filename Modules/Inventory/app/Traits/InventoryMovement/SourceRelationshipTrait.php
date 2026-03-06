<?php

namespace Modules\Inventory\Traits\InventoryMovement;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Inventory\Models\InventoryMovement\InventoryMovement;

trait SourceRelationshipTrait
{
    public function inventoryMovements(): MorphMany
    {
        return $this->morphMany(InventoryMovement::class, 'source');
    }
}
