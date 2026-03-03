<?php

namespace Modules\Inventory\Http\Resources\InventoryQuantity;

use App\Http\Resources\BaseJsonResource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Inventory\Models\InventoryQuantity\InventoryQuantity;
use Modules\MasterData\Http\Resources\Item\ItemResource;
use Modules\MasterData\Http\Resources\Location\LocationResource;

/** @mixin InventoryQuantity */
class InventoryQuantityResource extends BaseJsonResource
{
    /** @return array<string, int|ItemResource|LocationResource|string|Carbon> */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'item' => ItemResource::make($this->whenLoaded('item')),
            'location' => LocationResource::make($this->whenLoaded('location')),
            'quantity' => $this->quantity,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
