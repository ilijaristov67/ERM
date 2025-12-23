<?php

namespace Modules\Inventory\Models\InventoryQuantity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\MasterData\Models\Item\Item;
use Modules\MasterData\Models\Location\Location;

class InventoryQuantity extends Model
{
    protected $fillable = [
        'item_id',
        'location_id',
        'quantity',
    ];

    /** @return BelongsTo<Item, covariant InventoryQuantity> */
    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }

    /** @return BelongsTo<Location, covariant InventoryQuantity> */
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
}
