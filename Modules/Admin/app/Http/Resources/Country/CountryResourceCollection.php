<?php

namespace Modules\Admin\Http\Resources\Country;

use App\Http\Resources\BaseResourceCollection;
use App\Traits\ResourceCollectionToArray;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CountryResourceCollection extends BaseResourceCollection
{
    use ResourceCollectionToArray;
}
