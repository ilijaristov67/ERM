<?php

namespace Modules\Import\Http\Resources\Import;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Admin\Http\Resources\User\UserResource;
use Modules\Import\Http\Import;
use Modules\MasterData\Http\Resources\Invoice\InvoiceResource;
use Modules\Procurement\Http\Resources\Supplier\SupplierResource;

/** @mixin Import */
class ImportResource extends JsonResource
{
    /** @return array<string, mixed> */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'number' => $this->number,
            'user' => UserResource::make($this->whenLoaded('user')),
            'import_date' => $this->import_date,
            'supplier' => SupplierResource::make($this->whenLoaded('supplier')),
            'invoice' => InvoiceResource::make($this->whenLoaded('invoice')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
