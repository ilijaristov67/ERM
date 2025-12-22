<?php

namespace Modules\MasterData\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Modules\MasterData\Actions\Location\IndexLocation;
use Modules\MasterData\Http\Requests\Location\IndexLocationRequest;
use Modules\MasterData\Http\Resources\Location\LocationResourceCollection;

class IndexLocationController extends Controller
{
    public function __invoke(IndexLocationRequest $request): LocationResourceCollection
    {
        return IndexLocation::run($request);
    }
}
