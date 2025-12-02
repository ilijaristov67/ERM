<?php

namespace Modules\Admin\Http\Resources\Country;

use App\Http\Resources\BaseJsonResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Admin\Models\Country\Country;

/** @mixin Country */
class CountryResource extends BaseJsonResource
{
    /** @return array<string, int|string> */    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'iso_alpha_2' => $this->iso_alpha_2,
            'iso_alpha_3' => $this->iso_alpha_3,
            'numeric_code' => $this->numeric_code,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
