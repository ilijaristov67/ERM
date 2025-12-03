<?php

namespace Modules\Inventory\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Modules\Inventory\Actions\Product\StoreProduct;
use Modules\Inventory\Http\Requests\Product\StoreProductRequest;
use Modules\Inventory\Http\Resources\Product\ProductResource;

class StoreProductController extends Controller
{
    public function __invoke(StoreProductRequest $request): ProductResource
    {
        return StoreProduct::run($request);
    }
}
