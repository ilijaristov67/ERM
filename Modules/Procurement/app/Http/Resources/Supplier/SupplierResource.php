<?php

namespace Modules\Procurement\Http\Resources\Supplier;

use App\Http\Resources\BaseJsonResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Procurement\Database\Factories\Supplier\SupplierFactory;
use Modules\Procurement\Models\Supplier\Supplier;

/** @mixin Supplier */
class SupplierResource extends BaseJsonResource
{
    /** @return array<string, mixed> */
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
