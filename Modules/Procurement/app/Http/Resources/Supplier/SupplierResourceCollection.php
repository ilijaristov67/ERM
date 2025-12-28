<?php

namespace Modules\Procurement\Http\Resources\Supplier;

use App\Http\Resources\BaseResourceCollection;
use App\Traits\ResourceCollectionToArray;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SupplierResourceCollection extends BaseResourceCollection
{
 use ResourceCollectionToArray;
}
