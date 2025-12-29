<?php

namespace Modules\Procurement\Actions\Supplier;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Procurement\Http\Requests\Supplier\PatchSupplierRequest;
use Modules\Procurement\Http\Resources\Supplier\SupplierResource;
use Modules\Procurement\Models\Supplier\Supplier;

class PatchSupplier
{
    use AsAction;

    public function handle(PatchSupplierRequest $request, Supplier $supplier): SupplierResource
    {
        $supplier->update($request->validated());

        return SupplierResource::make($supplier);
    }
}
