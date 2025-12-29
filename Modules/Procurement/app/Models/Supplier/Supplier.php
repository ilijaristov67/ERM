<?php

namespace Modules\Procurement\Models\Supplier;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Procurement\Database\Factories\Supplier\SupplierFactory;

/**
 * @property int $id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Supplier extends Model
{
    use SoftDeletes;

    /** @use HasFactory<SupplierFactory> */
    use HasFactory;

    protected $table = 'suppliers';

    protected $fillable = [
        'name',
    ];
    public static function newFactory(): SupplierFactory
        {
        return new SupplierFactory();
        }
}
