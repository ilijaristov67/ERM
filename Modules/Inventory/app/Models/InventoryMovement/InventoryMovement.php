<?php

namespace Modules\Inventory\Models\InventoryMovement;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\Inventory\Enums\InventoryMovement\InventoryMovementSourceTypeEnum;

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

}
