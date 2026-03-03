<?php

namespace Modules\MasterData\Enums\Item;

use App\Traits\EnumToArray;

enum ItemTypeEnum: string
{
    use EnumToArray;
    case RAW_MATERIAL = 'raw_material';

    case FINISHED_MATERIAL = 'finished_material';

    case TRADE_GOOD = 'trade_good';
}
