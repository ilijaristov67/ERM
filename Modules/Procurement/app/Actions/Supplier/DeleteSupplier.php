<?php

namespace Modules\Procurement\Actions\Supplier;

use App\Http\Resources\SuccessfulOperationMessageResource;
use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Procurement\Models\Supplier\Supplier;
use Symfony\Component\HttpFoundation\Response;

class DeleteSupplier
{
    use AsAction;

    public function handle(Supplier $supplier): SuccessfulOperationMessageResource
    {
        $supplier->delete();

        return SuccessfulOperationMessageResource::make([
            'message' => __('Successfully deleted', [
                'entity' => __('entities.item'),
            ]),
            'code' => Response::HTTP_OK,
        ]);
    }
}
