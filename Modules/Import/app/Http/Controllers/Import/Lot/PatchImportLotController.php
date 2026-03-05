<?php

namespace Modules\Import\Http\Controllers\Import\Lot;

use App\Http\Controllers\Controller;
use Modules\Import\Actions\Import\Lot\PatchImportLot;
use Modules\Import\Http\Requests\Import\Lot\PatchImportLotRequest;
use Modules\Import\Http\Resources\Import\Lot\ImportLotResource;
use Modules\Import\Models\Import\Import;
use Modules\Import\Models\Import\Lot\ImportLot;

class PatchImportLotController extends Controller
{
    public function __invoke(PatchImportLotRequest $request, Import $import, ImportLot $importLot): ImportLotResource
    {
        return PatchImportLot::run($request, $importLot);
    }
}
