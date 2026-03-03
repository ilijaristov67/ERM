<?php

namespace Modules\Import\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use Modules\Import\Actions\Import\StoreImport;
use Modules\Import\Http\Requests\Import\StoreImportRequest;
use Modules\Import\Http\Resources\Import\ImportResource;

class StoreImportController extends Controller
{
    public function __invoke(StoreImportRequest $request): ImportResource
    {
        return StoreImport::run($request);
    }
}
