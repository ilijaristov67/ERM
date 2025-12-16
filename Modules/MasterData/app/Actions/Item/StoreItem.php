<?php

namespace Modules\MasterData\Actions\Item;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\MasterData\Http\Requests\Item\StoreItemRequest;
use Modules\MasterData\Http\Resources\Item\ItemResource;
use Modules\MasterData\Models\Item\Item;

class StoreItem
{
    use AsAction;

    public function handle(StoreItemRequest $request): ItemResource
    {
        $item = Item::query()->create($request->validated());

        return ItemResource::make($item);
    }
}
