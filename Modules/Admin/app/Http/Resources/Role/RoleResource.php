<?php

namespace Modules\Admin\Http\Resources\Role;

use App\Http\Resources\BaseJsonResource;
use Illuminate\Http\Request;
use Modules\Admin\Http\Resources\Permission\PermissionResource;
use Modules\Admin\Models\Role\Role;

/** @mixin Role */
class RoleResource extends BaseJsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'permissions' => $this->whenLoaded('permissions', function () {
                return PermissionResource::collection($this->getRolePermissions());
            }),
        ];
    }
}
