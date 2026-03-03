<?php

namespace Modules\MasterData\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use Modules\MasterData\Actions\Item\StoreItem;
use Modules\MasterData\Http\Requests\Item\StoreItemRequest;
use Modules\MasterData\Http\Resources\Item\ItemResource;

class StoreItemController extends Controller
{
    public function __invoke(StoreItemRequest $request): ItemResource
    {
        return StoreItem::run($request);
    }
}
