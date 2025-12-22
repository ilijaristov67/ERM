<?php

namespace Modules\MasterData\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessfulOperationMessageResource;
use Modules\MasterData\Actions\Location\DeleteLocation;
use Modules\MasterData\Http\Resources\Location\LocationResourceCollection;
use Modules\MasterData\Models\Location\Location;

class DeleteLocationController extends Controller
{
    public function __invoke(Location $location): SuccessfulOperationMessageResource
    {
        return DeleteLocation::run($location);
    }
}
