<?php

namespace Modules\Inventory\Actions\Product;

use App\Http\Resources\SuccessfulOperationMessageResource;
use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Inventory\Models\Product\Product;
use Symfony\Component\HttpFoundation\Response;

class DeleteProduct
{
    use AsAction;

    public function handle(Product $product): SuccessfulOperationMessageResource
    {
        $product->delete();

        return SuccessfulOperationMessageResource::make([
            'message' => __('Successfully deleted', [
                'entity' => __('entities.product'),
            ]),
            'code' => Response::HTTP_OK,
        ]);
    }
}
