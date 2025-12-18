<?php

namespace Modules\MasterData\Models\Location;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 */

class Location extends Model
{
    use SoftDeletes;
}
