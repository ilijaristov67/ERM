<?php

namespace Modules\Admin\Actions\Country;

use App\Http\Resources\SuccessfulOperationMessageResource;
use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Admin\Models\Country\Country;
use Symfony\Component\HttpFoundation\Response;

class DeleteCountry
{
    use AsAction;

    public function handle(Country $country): SuccessfulOperationMessageResource
    {
        $country->delete();

        return SuccessfulOperationMessageResource::make([
            'message' => __('Successfully deleted', [
                'entity' => __('entities.company'),
            ]),
            'code' => Response::HTTP_OK,
        ]);
    }
}
