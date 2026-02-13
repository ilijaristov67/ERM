<?php

namespace Modules\Procurement\Actions\Supplier;

use App\Http\Resources\SuccessfulOperationMessageResource;
use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Procurement\Models\Supplier\Supplier;

class DeleteSupplier
{
    use AsAction;

    public function handle(Supplier $supplier): SuccessfulOperationMessageResource
    {

    }
}
