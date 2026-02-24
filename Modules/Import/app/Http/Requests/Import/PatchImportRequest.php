<?php

namespace Modules\Import\Http\Requests\Import;

use App\Helpers\RequiredWithoutAllHelper;
use Illuminate\Foundation\Http\FormRequest;

class PatchImportRequest extends FormRequest
{
    private const array COLUMNS = [
        'import_date',
        'supplier_id',
        'invoice_id',
    ];

    /** @return array<string, mixed> */
    public function rules(): array
    {
        $requiredWithoutAll = new RequiredWithoutAllHelper(collect(self::COLUMNS));

        return [
            'import_date' => [
                'nullable',
                'date',
                'before_or_equal:today',
                'required_without_all:'.$requiredWithoutAll->handle('import_date'),
            ],
            'supplier_id' => [
                'nullable',
                'integer',
                'exists:suppliers,id',
                'required_without_all:'.$requiredWithoutAll->handle('supplier_id'),
            ],
            'invoice_id' => [
                'nullable',
                'integer',
                'exists:invoices,id',
                'required_without_all:'.$requiredWithoutAll->handle('invoice_id'),
            ],
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('import-update');
    }
}
