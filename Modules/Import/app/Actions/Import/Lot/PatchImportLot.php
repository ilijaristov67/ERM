<?php

namespace Modules\Import\Actions\Import\Lot;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Import\Http\Requests\Import\Lot\PatchImportLotRequest;
use Modules\Import\Http\Resources\Import\Lot\ImportLotResource;
use Modules\Import\Models\Import\Lot\ImportLot;

class PatchImportLot
{
    use AsAction;

    public function handle(PatchImportLotRequest $request, ImportLot $importLot): ImportLotResource
    {
        $importLot->update($request->validated());

        return ImportLotResource::make($importLot->loadMissing([
            'import.user',
            'import.supplier',
            'import.invoice',
            'location',
            'user',
        ]));
    }
}
