<?php

namespace Modules\Procurement\Actions\Supplier;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Procurement\Http\Requests\Supplier\StoreSupplierRequest;

class StoreSupplier
{
    use AsAction;

    public function handle(StoreSupplierRequest $request) {}
}
