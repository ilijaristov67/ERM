<?php

namespace Modules\MasterData\Models\Item;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\MasterData\Database\Factories\Item\ItemFactory;
use Modules\MasterData\Enums\Item\ItemTypeEnum;

/**
 * @property int $id
 * @property string $name
 * @property string $code
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null  $deleted_at
 */
class Item extends Model
{
    /** @use HasFactory<ItemFactory> */
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'name',
        'code',
        'type'
    ];

    protected $table = 'items';

    protected $casts = [
        'type' => ItemTypeEnum::class,
    ];

    public static function newFactory(): ItemFactory
    {
        return ItemFactory::new();
    }
}
