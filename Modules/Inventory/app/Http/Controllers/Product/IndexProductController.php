<?php

namespace Modules\Inventory\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Modules\Inventory\Actions\Product\IndexProduct;
use Modules\Inventory\Http\Requests\Product\IndexProductRequest;
use Modules\Inventory\Http\Resources\Product\ProductResourceCollection;

class IndexProductController extends Controller
{
    public function __invoke(IndexProductRequest $request): ProductResourceCollection
    {
        return IndexProduct::run($request);
    }
}
