<?php

namespace Modules\Inventory\Models\InventoryMovement;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Inventory\Enums\InventoryMovement\InventoryMovementSourceTypeEnum;
use Modules\MasterData\Models\Item\Item;

/**
 * @property int $id
 * @property int $item_id
 * @property string $quantity
 * @property int $from_location_id
 * @property int $to_location_id
 * @property InventoryMovementSourceTypeEnum $source_type
 * @property int $source_id
 * @property bool is_locked
 * @property int $user_id
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class InventoryMovement extends Model
{
    protected $table = 'inventory_movements';

    protected $fillable = [
        'item_id',
        'quantity',
        'from_location_id',
        'to_location_id',
        'source_type',
        'source_id',
        'is_locked',
        'user_id',
    ];

    protected $casts = [
        'source_type' => InventoryMovementSourceTypeEnum::class,
    ];

    /** @return BelongsTo<Item, covariant InventoryMovement> */
    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
}
