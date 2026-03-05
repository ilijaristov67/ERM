<?php

namespace Modules\Import\Http\Controllers\Import\Lot;

use App\Http\Controllers\Controller;
use Modules\Import\Actions\Import\Lot\StoreImportLot;
use Modules\Import\Http\Requests\Import\Lot\StoreImportLotRequest;
use Modules\Import\Http\Resources\Import\Lot\ImportLotResource;

class StoreImportLotController extends Controller
{
    public function __invoke(StoreImportLotRequest $request): ImportLotResource
    {
        return StoreImportLot::run($request);
    }
}
