<?php

namespace Modules\MasterData\Http\Resources\Location;

use App\Http\Resources\BaseJsonResource;
use Illuminate\Http\Request;
use Modules\Inventory\Http\Resources\InventoryQuantity\InventoryQuantityResource;
use Modules\MasterData\Models\Location\Location;

/** @mixin Location */
class LocationResource extends BaseJsonResource
{
    /** @return array<string,mixed> */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'capacity' => $this->capacity,
            'is_virtual' => $this->is_virtual,
            'inventory_quantities' => InventoryQuantityResource::collection(
                $this->whenLoaded('inventoryQuantities')
            ),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
