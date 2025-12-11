<?php

namespace Modules\Inventory\Http\Resources\Product;

use App\Http\Resources\BaseResourceCollection;
use App\Traits\ResourceCollectionToArray;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductResourceCollection extends BaseResourceCollection
{
    use ResourceCollectionToArray;
}
