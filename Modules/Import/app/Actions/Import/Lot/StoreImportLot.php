<?php

namespace Modules\Import\Actions\Import\Lot;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Import\Http\Requests\Import\Lot\StoreImportLotRequest;
use Modules\Import\Http\Resources\Import\Lot\ImportLotResource;
use Modules\Import\Models\Import\Import;
use Modules\Import\Models\Import\Lot\ImportLot;

class StoreImportLot
{
    use AsAction;

    public function handle(StoreImportLotRequest $request, Import $import): ImportLotResource
    {
        $importLot =$import->importLots()->create($request->validated());

        return ImportLotResource::make($importLot);
    }
}
