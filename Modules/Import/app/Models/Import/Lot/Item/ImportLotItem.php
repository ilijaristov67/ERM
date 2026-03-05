<?php

namespace Modules\Import\Models\Import\Lot\Item;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

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
    protected $table = 'import_lot_item';

    protected $fillable = [
        'import_lot_id',
        'item_id',
        'quantity',
    ];
}
