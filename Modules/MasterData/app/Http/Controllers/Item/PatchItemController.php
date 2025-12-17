<?php

namespace Modules\MasterData\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use Modules\MasterData\Actions\Item\PatchItem;
use Modules\MasterData\Http\Requests\Item\PatchItemRequest;
use Modules\MasterData\Http\Resources\Item\ItemResource;
use Modules\MasterData\Models\Item\Item;

class PatchItemController extends Controller
{
    public function __invoke(PatchItemRequest $request, Item $item): ItemResource
    {
        return PatchItem::run($request, $item);
    }
}
