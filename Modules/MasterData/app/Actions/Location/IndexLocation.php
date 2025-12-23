<?php

namespace Modules\MasterData\Actions\Location;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\MasterData\Http\Requests\Location\IndexLocationRequest;
use Modules\MasterData\Http\Resources\Location\LocationResourceCollection;
use Modules\MasterData\Models\Location\Location;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class IndexLocation
{
    use AsAction;

    public function handle(IndexLocationRequest $request): LocationResourceCollection
    {
        $locations = QueryBuilder::for(Location::class)
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::partial('name'),
                AllowedFilter::partial('type'),
                AllowedFilter::partial('capacity'),
                AllowedFilter::partial('is_virtual'),
            ])
            ->allowedSorts([
                'id',
                'name',
                'type',
                'capacity',
                'is_virtual',
            ])
            ->defaultSort('-id')
            ->with([
                'inventoryQuantities.item',
            ])
            ->paginate(
                perPage: $request->input('limit'),
                page: $request->input('page'),
            );

        return LocationResourceCollection::make($locations);
    }
}
