<?php

namespace Modules\MasterData\Http\Resources\Invoice;

use App\Http\Resources\BaseJsonResource;
use Illuminate\Http\Request;
use Modules\MasterData\Models\Invoice\Invoice;

/** @mixin Invoice */
class InvoiceResource extends BaseJsonResource
{
    /** @return array<string, mixed> */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
