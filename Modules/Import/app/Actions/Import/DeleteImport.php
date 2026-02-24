<?php

namespace Modules\Import\Actions\Import;

use App\Http\Resources\SuccessfulOperationMessageResource;
use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Import\Http\Import;
use Modules\Import\Http\Requests\Import\IndexImportRequest;
use Symfony\Component\HttpFoundation\Response;

class DeleteImport
{
    use AsAction;
    public function handle(Import $import): SuccessfulOperationMessageResource
    {
        $import->delete();

        return SuccessfulOperationMessageResource::make([
            'message' => __('Successfully deleted', [
                'entity' => __('entities.item'),
            ]),
            'code' => Response::HTTP_OK,
        ]);
    }
}
