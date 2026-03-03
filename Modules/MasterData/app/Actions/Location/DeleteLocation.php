<?php

namespace Modules\MasterData\Actions\Location;

use App\Http\Resources\SuccessfulOperationMessageResource;
use Lorisleiva\Actions\Concerns\AsAction;
use Modules\MasterData\Models\Location\Location;
use Symfony\Component\HttpFoundation\Response;

class DeleteLocation
{
    use AsAction;

    public function handle(Location $location): SuccessfulOperationMessageResource
    {
        $location->delete();

        return SuccessfulOperationMessageResource::make([
            'message' => __('Successfully deleted', [
                'entity' => __('entities.location'),
            ]),
            'code' => Response::HTTP_OK,
        ]);
    }
}
