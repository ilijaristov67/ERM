<?php

namespace Modules\Import\Actions\Import\Lot;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Import\Http\Requests\Import\Lot\IndexImportLotRequest;
use Modules\Import\Http\Resources\Import\Lot\ImportLotResource;
use Modules\Import\Http\Resources\Import\Lot\ImportLotResourceCollection;
use Modules\Import\Models\Import\Import;
use Modules\Import\Models\Import\Lot\ImportLot;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class IndexImportLot
{
    use AsAction;

    public function handle(IndexImportLotRequest $request, Import $import): ImportLotResource
    {
        $importLots = QueryBuilder::for(ImportLot::class)
            ->where('import_id', $import->id)
            ->AllowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('user_id'),
                AllowedFilter::exact('import_id'),
                AllowedFilter::exact('location_id'),
                AllowedFilter::partial('arrived_at'),
            ])
            ->allowedSorts([
                'id',
                'import_id',
                'user_id',
                'location_id',
                'arrived_at',
                'created_at',
                'updated_at',
            ])
            ->with([
                'import.user',
                'import.supplier',
                'import.invoice',
                'location',
                'user',
            ])
            ->paginate(
                perPage: $request->input('limit'),
                page: $request->input('page'),
            );

        return ImportLotResourceCollection::make($importLots);
    }
}
