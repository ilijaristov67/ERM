<?php

namespace Modules\MasterData\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessfulOperationMessageResource;
use Modules\MasterData\Actions\Item\DeleteItem;
use Modules\MasterData\Models\Item\Item;

class DeleteItemController extends Controller
{
    public function __invoke(Item $item): SuccessfulOperationMessageResource
    {
        return DeleteItem::run($item);
    }
}
