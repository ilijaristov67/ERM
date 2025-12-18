<?php

namespace Modules\MasterData\Http\Resources\Location;

use App\Http\Resources\BaseJsonResource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\MasterData\Enums\Location\LocationTypeEnum;
use Modules\MasterData\Models\Location\Location;

/** @mixin Location */
class LocationResource extends BaseJsonResource
{
    /** @return array<string, int|LocationTypeEnum|string|Carbon> */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'capacity' => $this->capacity,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
