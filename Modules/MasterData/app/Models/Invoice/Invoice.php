<?php

namespace Modules\MasterData\Models\Invoice;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\MasterData\Database\Factories\Invoice\InvoiceFactory;

/**
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Invoice extends Model
{
    /** @use HasFactory<InvoiceFactory> */
    use HasFactory;

    protected $table = 'invoice';

    protected $fillable = [];

    public static function newFactory(): InvoiceFactory
    {
        return InvoiceFactory::new();
    }
}
