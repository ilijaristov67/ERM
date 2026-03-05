<?php

namespace Modules\Import\Models\Import\Lot;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Admin\Models\User\User;
use Modules\Import\Database\Factories\Import\ImportFactory;
use Modules\Import\Database\Factories\Import\Lot\ImportLotFactory;
use Modules\Import\Models\Import\Import;
use Modules\MasterData\Models\Location\Location;

/**
 * Observed by ImportLotObserver
 *
 * @property int $id
 * @property int $import_id
 * @property int $location_id
 * @property Carbon $arrived_at
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class ImportLot extends Model
{
    /**
     * @use HasFactory<ImportFactory>
     */
    use HasFactory;

    protected $table = 'import_lots';

    protected $fillable = [
        'import_id',
        'location_id',
        'arrived_at',
        'user_id',
    ];

    protected $casts = [
        'arrived_at' => 'datetime',
    ];

    public static function newFactory(): ImportLotFactory
    {
        return ImportLotFactory::new();
    }

    /** @return BelongsTo<Import, covariant ImportLot> */
    public function import(): BelongsTo
    {
        return $this->belongsTo(Import::class);
    }

    /** @return BelongsTo<Location, covariant ImportLot> */
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    /** @return BelongsTo<User, covariant ImportLot> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
