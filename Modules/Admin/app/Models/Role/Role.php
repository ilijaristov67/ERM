<?php

namespace Modules\Admin\Models\Role;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Database\Factories\Role\RoleFactory;
use Spatie\Permission\Models\Permission;

/**
 * @property int $id
 * @property string $name
 */
class Role extends \Spatie\Permission\Models\Role
{
    /** @use HasFactory<RoleFactory> */
    use HasFactory;

    protected $guarded = [];

    /** @return Collection<int, Permission> */
    public function getRolePermissions(): Collection
    {
        return $this->name === config('admin.super_admin_role') ? Permission::all() : $this->permissions;
    }

    protected static function newFactory(): RoleFactory
    {
        return RoleFactory::new();
    }
}
