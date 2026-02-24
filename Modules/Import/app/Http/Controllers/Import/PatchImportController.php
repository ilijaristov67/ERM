<?php

namespace Modules\Import\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use Modules\Import\Actions\Import\PatchImport;
use Modules\Import\Http\Import;
use Modules\Import\Http\Requests\Import\PatchImportRequest;
use Modules\Import\Http\Resources\Import\ImportResource;

class PatchImportController extends Controller
{
    public function __invoke(PatchImportRequest $request, Import $import): ImportResource
    {
        return PatchImport::run($request, $import);
    }
}
