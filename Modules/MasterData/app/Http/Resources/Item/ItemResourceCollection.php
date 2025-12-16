<?php

namespace Modules\MasterData\Http\Resources\Item;

use App\Http\Resources\BaseResourceCollection;
use App\Traits\ResourceCollectionToArray;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ItemResourceCollection extends BaseResourceCollection
{
    use ResourceCollectionToArray;
}
