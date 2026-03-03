<?php

namespace Modules\Procurement\Actions\Supplier;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Procurement\Http\Requests\Supplier\StoreSupplierRequest;
use Modules\Procurement\Http\Resources\Supplier\SupplierResource;
use Modules\Procurement\Models\Supplier\Supplier;

class StoreSupplier
{
    use AsAction;

    public function handle(StoreSupplierRequest $request): SupplierResource
    {
        return SupplierResource::make(Supplier::create($request->validated()));
    }
}
