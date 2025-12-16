<?php

namespace Modules\MasterData\Http\Resources\Item;

use App\Traits\ResourceCollectionToArray;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ItemResourceCollection extends ResourceCollection
{
   use ResourceCollectionToArray;
}
