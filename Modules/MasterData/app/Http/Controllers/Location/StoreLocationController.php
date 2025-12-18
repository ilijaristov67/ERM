<?php

namespace Modules\MasterData\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Modules\MasterData\Actions\Location\StoreLocation;
use Modules\MasterData\Http\Requests\Location\StoreLocationRequest;
use Modules\MasterData\Http\Resources\Location\LocationResource;

class StoreLocationController extends Controller
{
    public function __invoke(StoreLocationRequest $request): LocationResource
    {
        return StoreLocation::run($request);
    }
}
