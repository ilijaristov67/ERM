<?php

namespace Modules\Admin\Http\Resources\User;

use App\Http\Resources\BaseJsonResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Modules\Admin\Http\Resources\Permission\PermissionResource;
use Modules\Admin\Http\Resources\Role\RoleResource;
use Modules\Admin\Models\User\User;

/** @mixin User */
class UserResource extends BaseJsonResource
{
    /** @return array<string, AnonymousResourceCollection|int|string|null> */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'username' => $this->username,
            'phone_number' => $this->phone_number,

            'roles' => RoleResource::collection(
                $this->whenLoaded('roles')
            ),
            'direct_permissions' => PermissionResource::collection(
                $this->whenLoaded('permissions')
            ),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
