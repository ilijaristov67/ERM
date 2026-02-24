<?php

namespace Modules\Import\Actions\Import;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Import\Http\Import;
use Modules\Import\Http\Requests\Import\IndexImportRequest;
use Modules\Import\Http\Resources\Import\ImportResource;
use Modules\Import\Http\Resources\Import\ImportResourceCollection;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class IndexImport
{
    use AsAction;

    public function handle(IndexImportRequest $request): ImportResourceCollection
    {
        $imports = QueryBuilder::for(Import::class)
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::partial('number'),
                AllowedFilter::exact('user_id'),
                AllowedFilter::partial('import_date'),
            ])
            ->allowedSorts([
                'id',
                'number',
                'user_id',
                'import_date',
                'created_at',
                'updated_at',
            ])
            ->defaultSort('-id')
            ->with([
                'user',
                'supplier',
                'invoice'
            ])
            ->paginate(
                perPage: $request->input('limit'),
                page: $request->input('page'),
            );

        return ImportResourceCollection::make($imports);
    }
}
