<?php

namespace Modules\Import\Actions\Import\Lot\Item;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Import\Http\Requests\Import\Lot\Item\StoreImportLotItemRequest;
use Modules\Import\Http\Resources\Import\Lot\Item\ImportLotItemResource;
use Modules\Import\Models\Import\Lot\ImportLot;

class StoreImportLotItem
{
    use AsAction;

    public function handle(StoreImportLotItemRequest $request, ImportLot $importLot): ImportLotItemResource {}
}
