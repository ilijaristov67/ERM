<?php

namespace Modules\Import\Http\Controllers\Import\Lot;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessfulOperationMessageResource;
use Modules\Import\Actions\Import\Lot\DeleteImportLot;
use Modules\Import\Models\Import\Import;
use Modules\Import\Models\Import\Lot\ImportLot;

class DeleteImportLotController extends Controller
{
    public function __invoke(Import $import, ImportLot $importLot): SuccessfulOperationMessageResource
    {
        return DeleteImportLot::run($importLot);
    }
}
