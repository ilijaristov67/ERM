<?php

namespace Modules\Inventory\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Modules\Inventory\Actions\Product\PatchProduct;
use Modules\Inventory\Http\Requests\Product\PatchProductRequest;
use Modules\Inventory\Http\Resources\Product\ProductResource;
use Modules\Inventory\Models\Product\Product;

class PatchProductController extends Controller
{
    public function __invoke(PatchProductRequest $request, Product $product): ProductResource
    {
        return PatchProduct::run($request, $product);
    }
}
