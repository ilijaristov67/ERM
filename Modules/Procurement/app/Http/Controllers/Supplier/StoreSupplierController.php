<?php

namespace Modules\Procurement\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Modules\Procurement\Actions\Supplier\StoreSupplier;
use Modules\Procurement\Http\Requests\Supplier\StoreSupplierRequest;
use Modules\Procurement\Http\Resources\Supplier\SupplierResource;

class StoreSupplierController extends Controller
{
    public function __invoke(StoreSupplierRequest $request): SupplierResource
    {
        return StoreSupplier::run($request);
    }
}
