<?php

namespace Modules\Import\Http\Controllers\Import\Lot;

use App\Http\Controllers\Controller;
use Modules\Import\Actions\Import\Lot\Item\StoreImportLotItem;
use Modules\Import\Http\Requests\Import\Lot\Item\StoreImportLotItemRequest;
use Modules\Import\Http\Resources\Import\Lot\Item\ImportLotItemResource;
use Modules\Import\Models\Import\Import;
use Modules\Import\Models\Import\Lot\ImportLot;

class StoreImportLotItemController extends Controller
{
    public function __invoke(StoreImportLotItemRequest $request, Import $import, ImportLot $importLot): ImportLotItemResource
    {
        return StoreImportLotItem::run($request, $importLot);
    }
}
