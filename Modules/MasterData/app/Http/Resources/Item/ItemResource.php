<?php

namespace Modules\MasterData\Http\Resources\Item;

use App\Http\Resources\BaseJsonResource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\MasterData\Enums\Item\ItemTypeEnum;
use Modules\MasterData\Models\Item\Item;

/** @mixin Item */
class ItemResource extends BaseJsonResource
{
    /** @return array<string, int|string|ItemTypeEnum|Carbon> */

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'code' => $this->code,
            'type' => $this->type,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
