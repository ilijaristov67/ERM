<?php

namespace Modules\MasterData\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Modules\MasterData\Http\Resources\Location\LocationResourceCollection;

class DeleteLocationController extends Controller
{
    public function __invoke(Location $location): LocationResourceCollection
    {
        return IndexLocation::run($location);
    }
}
