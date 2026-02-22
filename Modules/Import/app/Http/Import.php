<?php

namespace Modules\Import\Http;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $number
 * @property int $user_id
 * @property Carbon $import_date
 * @property int $supplier_id
 * @property int $invoice_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Import extends Model
{
    protected $table = 'imports';

    protected $fillable = [
        'number',
        'user_id',
        'import_date',
        'supplier_id',
        'invoice_id',
    ];
}
