<?php

namespace Modules\MasterData\Actions\Location;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\MasterData\Http\Requests\Location\StoreLocationRequest;
use Modules\MasterData\Http\Resources\Location\LocationResource;
use Modules\MasterData\Models\Location\Location;

class StoreLocation
{
    use AsAction;

        public function handle(StoreLocationRequest $request): LocationResource
        {
            $location = Location::query()->create($request->validated());
            return LocationResource::make($location);
        }
    }

