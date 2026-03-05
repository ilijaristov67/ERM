<?php

namespace Modules\Import\Http\Controllers\Import\Lot;

use App\Http\Controllers\Controller;
use Modules\Import\Actions\Import\Lot\StoreImportLot;
use Modules\Import\Http\Requests\Import\Lot\StoreImportLotRequest;
use Modules\Import\Http\Resources\Import\Lot\ImportLotResource;
use Modules\Import\Models\Import\Import;

class StoreImportLotController extends Controller
{
    public function __invoke(StoreImportLotRequest $request, Import $import): ImportLotResource
    {
        return StoreImportLot::run($request, $import);
    }
}
