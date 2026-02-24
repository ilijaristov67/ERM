<?php

namespace Modules\Import\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use Modules\Import\Actions\Import\IndexImport;
use Modules\Import\Http\Requests\Import\IndexImportRequest;
use Modules\Import\Http\Resources\Import\ImportResourceCollection;

class IndexImportController extends Controller
{
    public function __invoke(IndexImportRequest $request): ImportResourceCollection
    {
        return IndexImport::run($request);
    }
}
