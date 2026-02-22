<?php

namespace Modules\MasterData\Http\Resources\Invoice;

use App\Http\Resources\BaseResourceCollection;
use App\Traits\ResourceCollectionToArray;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class InvoiceResourceCollection extends BaseResourceCollection
{
    use ResourceCollectionToArray;
}
