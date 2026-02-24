<?php

namespace Modules\Import\Actions\Import;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Import\Http\Import;
use Modules\Import\Http\Requests\Import\StoreImportRequest;
use Modules\Import\Http\Resources\Import\ImportResource;

class StoreImport
{
    use AsAction;

    public function handle(StoreImportRequest $request): ImportResource
    {
        $import = Import::create($request->validated());

        return new ImportResource($import->loadMissing('supplier', 'user', 'invoice'));
    }
}
