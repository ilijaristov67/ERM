<?php

namespace Modules\MasterData\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Modules\MasterData\Actions\Location\PatchLocation;
use Modules\MasterData\Http\Requests\Location\PatchLocationRequest;
use Modules\MasterData\Http\Resources\Location\LocationResource;
use Modules\MasterData\Models\Location\Location;

class PatchLocationController extends Controller
{
    public function __invoke(PatchLocationRequest $request, Location $location): LocationResource
    {
        return PatchLocation::run($request, $location);
    }
}
