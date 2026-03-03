<?php

namespace Modules\MasterData\Http\Resources\Item;

use App\Http\Resources\BaseJsonResource;
use Illuminate\Http\Request;
use Modules\Inventory\Http\Resources\InventoryQuantity\InventoryQuantityResource;
use Modules\MasterData\Models\Item\Item;

/** @mixin Item */
class ItemResource extends BaseJsonResource
{
    /** @return array<string, mixed> */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'code' => $this->code,
            'type' => $this->type,
            'weight' => $this->weight,
            'inventory_quantities' => InventoryQuantityResource::collection(
                $this->whenLoaded('inventoryQuantities')
            ),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
