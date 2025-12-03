<?php

namespace Modules\Inventory\Actions\Product;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Inventory\Http\Requests\Product\StoreProductRequest;
use Modules\Inventory\Http\Resources\Product\ProductResource;
use Modules\Inventory\Models\Product\Product;

class StoreProduct
{
    use AsAction;

    public function handle(StoreProductRequest $request): ProductResource
    {
        $product = Product::query()->create($request->validated());

        return ProductResource::make($product);
    }
}
