<?php

namespace Modules\Admin\Models\Country;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Database\Factories\Country\CountryFactory;

/**
 * @property int $id
 * @property string $name
 * @property string $iso_alpha_2
 * @property string $iso_alpha_3
 * @property string $numeric_code
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Country extends Model
{
    /** @use HasFactory<CountryFactory> */
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'name',
        'iso_alpha_2',
        'iso_alpha_3',
        'numeric_code',
    ];

    protected $table = 'countries';

    public static function newFactory(): CountryFactory
    {
        return new CountryFactory();
    }
}
