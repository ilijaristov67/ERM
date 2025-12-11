<?php

namespace Modules\Inventory\Actions\Product;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Inventory\Http\Requests\Product\PatchProductRequest;
use Modules\Inventory\Http\Resources\Product\ProductResource;
use Modules\Inventory\Models\Product\Product;

class PatchProduct
{
    use AsAction;

    public function handle(PatchProductRequest $request, Product $product): ProductResource
    {
        $product = Product::query()->create($request->validated());

        return ProductResource::make($product);
    }
}
