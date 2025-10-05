<?php

namespace Modules\Admin\Models\User;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class User extends Model
{
    use HasRoles;

    protected string $guard_name = 'api';
}
