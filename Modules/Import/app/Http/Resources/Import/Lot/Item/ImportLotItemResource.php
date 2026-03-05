<?php

namespace Modules\Import\Http\Resources\Import\Lot\Item;

use App\Http\Resources\BaseJsonResource;
use Illuminate\Http\Request;
use Modules\Import\Http\Resources\Import\Lot\ImportLotResource;
use Modules\Import\Models\Import\Lot\Item\ImportLotItem;

/**
 * @mixin ImportLotItem
 */
class ImportLotItemResource extends BaseJsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'import_lot' => ImportLotResource::make($this->whenLoaded('importLot')),
            'item' => self::make($this->whenLoaded('item')),
            'quantity' => $this->quantity,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
