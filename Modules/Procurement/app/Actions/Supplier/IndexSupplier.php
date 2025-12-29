<?php

namespace Modules\Procurement\Actions\Supplier;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Procurement\Http\Requests\Supplier\IndexSupplierRequest;
use Modules\Procurement\Http\Resources\Supplier\SupplierResourceCollection;
use Modules\Procurement\Models\Supplier\Supplier;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class IndexSupplier
{
    use AsAction;

    public function handle(IndexSupplierRequest $request): SupplierResourceCollection
    {
        $suppliers = QueryBuilder::for(Supplier::class)
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::partial('name'),
            ])
            ->allowedSorts([
                'id',
                'name',
            ])
            ->defaultSort('-id')
            ->paginate(
                perPage: $request->input('limit'),
                page: $request->input('page'),
            );

        return SupplierResourceCollection::make($suppliers);
    }
}
