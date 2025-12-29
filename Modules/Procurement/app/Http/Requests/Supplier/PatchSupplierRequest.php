<?php

namespace Modules\Procurement\Http\Requests\Supplier;

use App\Helpers\RequiredWithoutAllHelper;
use Illuminate\Foundation\Http\FormRequest;

class PatchSupplierRequest extends FormRequest
{
    private const array COLUMNS = [
        'name',
    ];

    /** @return array<string, array<int, string>> */
    public function rules(): array
    {
        $supplier = $this->route('supplier');
        $requiredWithoutAll = new RequiredWithoutAllHelper(collect(self::COLUMNS));

        return [
            'name' => [
                'nullable',
                'string',
                'unique:suppliers,name,'.$supplier->id,
                'required_without_all:'.$requiredWithoutAll->handle('name'),
            ],
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('procurement-suppliers-update');
    }
}
