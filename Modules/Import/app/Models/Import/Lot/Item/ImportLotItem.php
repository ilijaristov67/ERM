<?php

namespace Modules\Import\Models\Import\Lot\Item;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Import\Database\Factories\Import\Lot\Item\ImportLotItemFactory;
use Modules\Import\Models\Import\Lot\ImportLot;
use Modules\MasterData\Models\Item\Item;

/**
 * Observed by ImportLotItemObserver
 *
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

    /** @return BelongsTo<ImportLot, covariant ImportLotItem> */
    public function importLot(): BelongsTo
    {
        return $this->belongsTo(ImportLot::class);
    }

    /**
     * @return BelongsTo<Item, covariant ImportLotItem>
     */
    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
}
