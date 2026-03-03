<?php

namespace Modules\Admin\Actions\Company;

use App\Http\Resources\SuccessfulOperationMessageResource;
use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Admin\Models\Company\Company;
use Symfony\Component\HttpFoundation\Response;

class DeleteCompany
{
    use AsAction;

    public function handle(Company $company): SuccessfulOperationMessageResource
    {
        $company->delete();

        return SuccessfulOperationMessageResource::make([
            'message' => __('Successfully deleted', [
                'entity' => __('entities.company'),
            ]),
            'code' => Response::HTTP_OK,
        ]);
    }
}
