<?php

namespace Modules\Admin\Http\Resources\Company;

use App\Http\Resources\BaseResourceCollection;
use App\Traits\ResourceCollectionToArray;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CompanyResourceCollection extends BaseResourceCollection
{
    use ResourceCollectionToArray;
}
