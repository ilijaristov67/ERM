<?php

namespace Modules\Inventory\Enums\InventoryMovement;

use App\Interfaces\MorphableInterface;
use App\Traits\EnumToArray;
use Modules\Import\Models\Import\Lot\Item\ImportLotItem;

enum InventoryMovementSourceTypeEnum: string implements MorphableInterface
{
    use EnumToArray;

    case IMPORT_LOT_ITEM = 'import_lot_item';

    public function modelClass(): string
    {
        return match ($this) {
            self::IMPORT_LOT_ITEM => ImportLotItem::class,
        };
    }
}
