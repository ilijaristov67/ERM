<?php

namespace Modules\Import\Http;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Admin\Models\User\User;
use Modules\Import\Database\Factories\Import\ImportFactory;
use Modules\MasterData\Models\Invoice\Invoice;
use Modules\Procurement\Models\Supplier\Supplier;

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

    /** @return BelongsTo<User, covariant Import> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /** @return BelongsTo<Supplier, covariant Import> */
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    /** @return BelongsTo<Invoice, covariant Import> */
    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }
}
