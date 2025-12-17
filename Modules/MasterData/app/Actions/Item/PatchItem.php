<?php

namespace Modules\MasterData\Actions\Item;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\MasterData\Http\Requests\Item\PatchItemRequest;
use Modules\MasterData\Http\Resources\Item\ItemResource;
use Modules\MasterData\Models\Item\Item;

class PatchItem
{
    use AsAction;

    public function handle(PatchItemRequest $request, Item $item): ItemResource
    {
        $item->update($request->validated());

        return ItemResource::make($item);
    }
}
