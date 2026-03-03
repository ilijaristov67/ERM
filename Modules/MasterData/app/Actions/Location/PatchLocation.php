<?php

namespace Modules\MasterData\Actions\Location;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\MasterData\Http\Requests\Location\PatchLocationRequest;
use Modules\MasterData\Http\Resources\Location\LocationResource;
use Modules\MasterData\Models\Location\Location;

class PatchLocation
{
    use AsAction;

    public function handle(PatchLocationRequest $request, Location $location): LocationResource
    {
        $location->update($request->validated());

        return LocationResource::make($location);
    }
}
