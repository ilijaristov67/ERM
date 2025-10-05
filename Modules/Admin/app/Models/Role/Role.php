<?php

namespace Modules\Admin\Models\Role;

use Illuminate\Database\Eloquent\Collection;
use Spatie\Permission\Models\Permission;

/**
 * @property int $id
 * @property string $name
 */
class Role extends \Spatie\Permission\Models\Role
{
    /** @return Collection<int, Permission> */
    public function getRolePermissions(): Collection
    {
        return $this->name === config('admin.super_admin_role') ? Permission::all() : $this->permissions;
    }
}
