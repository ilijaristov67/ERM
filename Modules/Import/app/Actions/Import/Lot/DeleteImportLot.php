<?php

namespace Modules\Import\Actions\Import\Lot;

use App\Http\Resources\SuccessfulOperationMessageResource;
use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Import\Models\Import\Import;
use Modules\Import\Models\Import\Lot\ImportLot;
use Symfony\Component\HttpFoundation\Response;

class DeleteImportLot
{
    use AsAction;

    public function handle(ImportLot $importLot): SuccessfulOperationMessageResource
    {
        $importLot->delete();

        return SuccessfulOperationMessageResource::make([
            'message' => __('Successfully deleted', [
                'entity' => __('entities.import_lot'),
            ]),
            'code' => Response::HTTP_OK,
        ]);
    }
}
