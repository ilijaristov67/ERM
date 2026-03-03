<?php

namespace Modules\Admin\Models\Permission;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Database\Factories\Permission\PermissionFactory;

/**
 * @property int $id
 * @property string $name
 */
class Permission extends \Spatie\Permission\Models\Permission
{
    /** @use HasFactory<PermissionFactory> */
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory(): PermissionFactory
    {
        return PermissionFactory::new();
    }
}
