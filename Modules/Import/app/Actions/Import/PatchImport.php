<?php

namespace Modules\Import\Actions\Import;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Import\Http\Requests\Import\PatchImportRequest;
use Modules\Import\Http\Resources\Import\ImportResource;
use Modules\Import\Models\Import\Import;

class PatchImport
{
    use AsAction;

    public function handle(PatchImportRequest $request, Import $import): ImportResource
    {
        $import->update($request->validated());

        return ImportResource::make($import->loadMissing(['user', 'supplier', 'invoice']));
    }
}
