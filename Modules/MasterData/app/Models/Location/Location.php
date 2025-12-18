<?php

namespace Modules\MasterData\Models\Location;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\MasterData\Database\Factories\Location\LocationFactory;
use Modules\MasterData\Enums\Location\LocationTypeEnum;

/**
 * @property int $id
 * @property string $name
 * @property LocationTypeEnum $type
 * @property string $capacity
 * @property bool $is_virtual
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Location extends Model
{
    /** @use HasFactory<LocationFactory> */
    use HasFactory;

    use SoftDeletes;
}
