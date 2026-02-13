<?php

namespace Modules\Procurement\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessfulOperationMessageResource;
use Modules\Procurement\Actions\Supplier\DeleteSupplier;
use Modules\Procurement\Models\Supplier\Supplier;

class DeleteSupplierController extends Controller
{
    public function __invoke(Supplier $supplier): SuccessfulOperationMessageResource
    {
        return DeleteSupplier::run($supplier);
    }
}
