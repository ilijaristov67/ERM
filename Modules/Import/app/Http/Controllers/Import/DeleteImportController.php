<?php

namespace Modules\Import\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessfulOperationMessageResource;
use Modules\Import\Actions\Import\DeleteImport;
use Modules\Import\Models\Import\Import;

class DeleteImportController extends Controller
{
    public function __invoke(Import $import): SuccessfulOperationMessageResource
    {
        return DeleteImport::run($import);
    }
}
