<?php

namespace Modules\Import\Http\Resources\Import;

use App\Http\Resources\BaseResourceCollection;
use App\Traits\ResourceCollectionToArray;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ImportResourceCollection extends BaseResourceCollection
{
   use ResourceCollectionToArray;
}
