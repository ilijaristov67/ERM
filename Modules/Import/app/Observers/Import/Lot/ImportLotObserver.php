<?php

namespace Modules\Import\Observers\Import\Lot;

use Carbon\Carbon;
use Modules\Import\Models\Import\Lot\ImportLot;

class ImportLotObserver
{
    public function creating(ImportLot $importLot): void
    {
        $importLot->arrived_at = Carbon::now();
    }
}
