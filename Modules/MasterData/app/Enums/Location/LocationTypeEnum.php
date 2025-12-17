<?php

namespace Modules\MasterData\Enums\Location;

use App\Traits\EnumToArray;

enum LocationTypeEnum: string
{
    use EnumToArray;

    case WAREHOUSE = 'warehouse';

    case FACTORY = 'factory';

    case STORE  = 'store';

     case TRANSIT = 'transit';

     case DAMAGED = 'damaged';
}
