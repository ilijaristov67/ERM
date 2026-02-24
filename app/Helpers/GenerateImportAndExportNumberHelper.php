<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class GenerateImportAndExportNumberHelper
{
    use AsAction;

    public function handle(string $prefix, string $table): string
    {
        $today = Carbon::now()->format('dmy');

        $count = DB::table($table)
            ->whereDate('created_at', Carbon::today())
            ->count() + 1;

        $sequence = mb_str_pad((string) $count, 3, '0', STR_PAD_LEFT);

        return "{$prefix}-{$today}-{$sequence}";
    }
}
