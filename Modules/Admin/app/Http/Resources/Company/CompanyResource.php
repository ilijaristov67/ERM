<?php

namespace Modules\Admin\Http\Resources\Company;

use App\Http\Resources\BaseJsonResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Admin\Models\Company\Company;

/** @mixin Company */
class CompanyResource extends BaseJsonResource
{
    /** @return array<string, int|string> */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
