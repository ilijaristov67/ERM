<?php

namespace Modules\MasterData\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use Modules\MasterData\Actions\Item\IndexItem;
use Modules\MasterData\Http\Requests\Item\IndexItemRequest;
use Modules\MasterData\Http\Resources\Item\ItemResourceCollection;

class IndexItemController extends Controller
{
    public function __invoke(IndexItemRequest $request): ItemResourceCollection
    {
        return IndexItem::run($request);
    }
}
