<?php

namespace Modules\Procurement\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Modules\Procurement\Actions\Supplier\IndexSupplier;
use Modules\Procurement\Http\Requests\Supplier\IndexSupplierRequest;
use Modules\Procurement\Http\Resources\Supplier\SupplierResourceCollection;

class IndexSupplierController extends Controller
{
    public function __invoke(IndexSupplierRequest $request):  SupplierResourceCollection
    {
        return IndexSupplier::run($request);
    }
}
