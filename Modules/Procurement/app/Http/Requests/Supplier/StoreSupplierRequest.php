<?php

namespace Modules\Procurement\Http\Requests\Supplier;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
{
    /** @return array<string, array<int, string>> */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'unique:suppliers,name',
            ],
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('procurement-suppliers-create');
    }
}
