<?php

namespace Modules\Inventory\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessfulOperationMessageResource;
use Modules\Inventory\Actions\Product\DeleteProduct;
use Modules\Inventory\Models\Product\Product;

class DeleteProductController extends Controller
{
    public function __invoke(Product $product): SuccessfulOperationMessageResource
    {
        return DeleteProduct::run($product);
    }
}
