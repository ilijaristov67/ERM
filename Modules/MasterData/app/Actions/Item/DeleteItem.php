<?php

namespace Modules\MasterData\Actions\Item;

use App\Http\Resources\SuccessfulOperationMessageResource;
use Lorisleiva\Actions\Concerns\AsAction;
use Modules\MasterData\Models\Item\Item;
use Symfony\Component\HttpFoundation\Response;

class DeleteItem
{
    use AsAction;

    public function handle(Item $item): SuccessfulOperationMessageResource
    {
        $item->delete();

        return SuccessfulOperationMessageResource::make([
            'message' => __('Successfully deleted', [
                'entity' => __('entities.item'),
            ]),
            'code' => Response::HTTP_OK,
        ]);
    }
}
