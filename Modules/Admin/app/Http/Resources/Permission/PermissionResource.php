<?php

namespace Modules\Admin\Http\Resources\Permission;

use App\Http\Resources\BaseJsonResource;
use Illuminate\Http\Request;
use Modules\Admin\Models\Permission\Permission;

/** @mixin Permission */
class PermissionResource extends BaseJsonResource
{
    /** @return array<string, int|string> */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
