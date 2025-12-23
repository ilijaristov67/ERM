<?php

namespace Modules\Inventory\Enums\InventoryMovement;

use App\Interfaces\MorphableInterface;
use App\Traits\EnumToArray;

enum InventoryMovementSourceTypeEnum: string implements MorphableInterface
{
    use EnumToArray;

    public function modelClass(): string
    {
        //
    }
}
