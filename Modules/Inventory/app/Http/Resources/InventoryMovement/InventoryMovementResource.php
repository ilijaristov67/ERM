<?php

namespace Modules\Inventory\Http\Resources\InventoryMovement;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Admin\Http\Resources\User\UserResource;
use Modules\Inventory\Models\InventoryMovement\InventoryMovement;
use Modules\MasterData\Http\Resources\Item\ItemResource;
use Modules\MasterData\Http\Resources\Location\LocationResource;

/** @mixin InventoryMovement */
class InventoryMovementResource extends JsonResource
{
    /** @return array<string, mixed> */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'item' => ItemResource::make($this->whenLoaded('item')),
            'quantity' => $this->quantity,
            'to_location' => LocationResource::make($this->whenLoaded('toLocation')),
            'from_location' => LocationResource::make($this->whenLoaded('fromLocation')),
            'source_type' => $this->source_type,
            'source_id' => $this->source_id,
            'is_locked' => $this->is_locked,
            'user' => UserResource::make($this->whenLoaded('user')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
