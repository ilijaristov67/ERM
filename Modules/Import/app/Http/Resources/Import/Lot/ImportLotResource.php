<?php

namespace Modules\Import\Http\Resources\Import\Lot;

use App\Http\Resources\BaseJsonResource;
use Illuminate\Http\Request;
use Modules\Admin\Http\Resources\User\UserResource;
use Modules\Import\Http\Resources\Import\ImportResource;
use Modules\Import\Models\Import\Lot\ImportLot;
use Modules\MasterData\Http\Resources\Location\LocationResource;

/** @mixin ImportLot */
class ImportLotResource extends BaseJsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'import' => ImportResource::make($this->whenLoaded('import')),
            'location' => LocationResource::make($this->whenLoaded('location')),
            'arrived_at' => $this->arrived_at,
            'user' => UserResource::make($this->whenLoaded('user')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
