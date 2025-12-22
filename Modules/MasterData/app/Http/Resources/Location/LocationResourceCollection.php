<?php

namespace Modules\MasterData\Http\Resources\Location;

use App\Http\Resources\BaseJsonResource;
use App\Http\Resources\BaseResourceCollection;
use App\Traits\ResourceCollectionToArray;

class LocationResourceCollection extends BaseResourceCollection
{
    use ResourceCollectionToArray;
}
