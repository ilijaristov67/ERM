<?php

namespace Modules\Import\Models\Import\Lot\Item;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Import\Database\Factories\Import\Lot\Item\ImportLotItemFactory;

/**
 * @property int $id
 * @property int $importLotId
 * @property int $item_id
 * @property string $quantity
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class ImportLotItem extends Model
{
    /** @use HasFactory<ImportLotItemFactory> */
    use HasFactory;

    protected $table = 'import_lot_item';

    protected $fillable = [
        'import_lot_id',
        'item_id',
        'quantity',
    ];

    public static function newFactory(): ImportLotItemFactory
    {
        return new ImportLotItemFactory();
    }
}
