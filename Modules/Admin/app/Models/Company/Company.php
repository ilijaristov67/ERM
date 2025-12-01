<?php

namespace Modules\Admin\Models\Company;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Database\Factories\Company\CompanyFactory;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Company extends Model
{
    /** @use HasFactory<CompanyFactory> */
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    public static function newFactory(): CompanyFactory
    {
        return new CompanyFactory();
    }
}
