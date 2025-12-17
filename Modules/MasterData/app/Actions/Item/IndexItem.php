<?php

namespace Modules\MasterData\Actions\Item;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\MasterData\Http\Requests\Item\IndexItemRequest;
use Modules\MasterData\Http\Resources\Item\ItemResourceCollection;
use Modules\MasterData\Models\Item\Item;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class IndexItem
{
    use AsAction;

    public function handle(IndexItemRequest $request): ItemResourceCollection
    {
        $items = QueryBuilder::for(Item::class)
            ->AllowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::partial('name'),
                AllowedFilter::partial('type'),
                AllowedFilter::exact('code'),
            ])
            ->allowedSorts([
                'id',
                'name',
                'type',
                'code',
            ])
            ->defaultSort('-id')
            ->paginate(
                perPage: $request->input('limit'),
                page: $request->input('page'),
            );

        return ItemResourceCollection::make($items);
    }
}
