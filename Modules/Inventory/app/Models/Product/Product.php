<?php

namespace Modules\Inventory\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Inventory\Database\Factories\Product\ProductFactory;

class Product extends Model
{
    /** @use HasFactory<ProductFactory> */
    use HasFactory;

    use SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'name',
    ];

    protected static function newFactory(): ProductFactory
    {
        return ProductFactory::new();
    }
}
