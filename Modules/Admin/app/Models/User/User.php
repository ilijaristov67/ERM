<?php

namespace Modules\Admin\Models\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $phone_number
 * @property string $password
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class User extends Authenticatable implements JWTSubject
{
    use HasRoles;

    protected string $guard_name = 'api';


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function getJWTIdentifier(): mixed
    {
        return $this->getKey();
    }

    /** @return array<string, Collection<int,string>> */
    public function getJWTCustomClaims(): array
    {
        return [];
    }

}
