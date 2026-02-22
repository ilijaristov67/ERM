<?php

namespace Modules\Import\Http;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Import\Database\Factories\Import\ImportFactory;

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
    /** @use HasFactory<ImportFactory> */
    use HasFactory;

    protected $table = 'imports';

    protected $fillable = [
        'number',
        'user_id',
        'import_date',
        'supplier_id',
        'invoice_id',
    ];

    public static function newFactory(): ImportFactory
    {
        return ImportFactory::new();
    }
}
