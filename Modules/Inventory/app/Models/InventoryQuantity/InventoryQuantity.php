<?php

namespace Modules\Inventory\Models\InventoryQuantity;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\MasterData\Models\Item\Item;
use Modules\MasterData\Models\Location\Location;

/**
 * @property int $id
 * @property int $item_id
 * @property int $location_id
 * @property string $quantity
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
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
