<?php

namespace Modules\Import\Models\Import\Lot;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $location_id
 * @property Carbon $arrived_at
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class ImportLot extends Model
{

    protected $table = 'import_lots';

    protected $fillable = [
        'import_id',
        'location_id',
        'arrived_at',
        'user_id'
    ];

    protected $casts = [
        'arrived_at' => 'datetime',
    ];
}
