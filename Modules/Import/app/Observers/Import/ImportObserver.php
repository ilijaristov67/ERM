<?php

namespace Modules\Import\Observers\Import;

use App\Helpers\GenerateImportAndExportNumberHelper;
use Modules\Import\Http\Import;

class ImportObserver
{
    public function creating(Import $import): void
    {
        $import->number = GenerateImportAndExportNumberHelper::run('IMP', 'imports');
    }
}
