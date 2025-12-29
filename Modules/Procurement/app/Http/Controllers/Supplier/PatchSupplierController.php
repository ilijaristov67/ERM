<?php

namespace Modules\Procurement\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Modules\Procurement\Actions\Supplier\PatchSupplier;
use Modules\Procurement\Http\Requests\Supplier\PatchSupplierRequest;
use Modules\Procurement\Http\Resources\Supplier\SupplierResource;
use Modules\Procurement\Models\Supplier\Supplier;

class PatchSupplierController extends Controller
{
    public function __invoke(PatchSupplierRequest $request, Supplier $supplier): SupplierResource
    {
        return PatchSupplier::run($request, $supplier);
    }
}
