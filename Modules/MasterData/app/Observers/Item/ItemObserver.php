<?php

namespace Modules\MasterData\Observers\Item;

use App\Helpers\getNextMaxNumberHelper;
use Carbon\Carbon;
use Modules\MasterData\Models\Item\Item;

class ItemObserver
{
    public function creating(Item $item): void
    {
        $helper = new getNextMaxNumberHelper(Item::query()->count());
        $maxNumber = $helper->handle();
        $date = Carbon::now()->format(
            config('admin.date_format_together')
        );

        $item->code = "PRODUCT_{$maxNumber}-{$date}";
    }
}
