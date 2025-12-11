<?php

namespace Modules\Inventory\Actions\Product;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Inventory\Http\Requests\Product\IndexProductRequest;
use Modules\Inventory\Http\Resources\Product\ProductResourceCollection;
use Modules\Inventory\Models\Product\Product;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class IndexProduct
{
    use AsAction;

    public function handle(IndexProductRequest $request): ProductResourceCollection
    {
        $products = QueryBuilder::for(Product::class)
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::partial('name'),
            ])
            ->AllowedSorts([
                'id',
                'name',
            ])
            ->defaultSort('-id')
            ->paginate(
                perPage: $request->input('limit'),
                page: $request->input('page')
            );

        return ProductResourceCollection::make($products);
    }
}
