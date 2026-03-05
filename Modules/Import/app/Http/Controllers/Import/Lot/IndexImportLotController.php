<?php

namespace Modules\Import\Http\Controllers\Import\Lot;

use App\Http\Controllers\Controller;
use Modules\Import\Actions\Import\Lot\IndexImportLot;
use Modules\Import\Http\Requests\Import\Lot\IndexImportLotRequest;
use Modules\Import\Http\Resources\Import\Lot\ImportLotResourceCollection;
use Modules\Import\Models\Import\Import;

class IndexImportLotController extends Controller
{
    public function __invoke(IndexImportLotRequest $request, Import $import): ImportLotResourceCollection
    {
        return IndexImportLot::run($request, $import);
    }
}
