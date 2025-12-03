<?php

namespace Modules\Inventory\Http\Resources\Product;

use App\Http\Resources\BaseJsonResource;
use Illuminate\Http\Request;
use Modules\Inventory\Models\Product\Product;

/** @mixin Product */
class ProductResource extends BaseJsonResource
{
    /** @return array<string, int|string> */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
