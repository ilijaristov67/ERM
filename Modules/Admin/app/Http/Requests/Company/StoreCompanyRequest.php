<?php

namespace Modules\Admin\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
{
    /** @return array<string, array<string>> */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
            ],
            'email' => [
                'required',
                'string',
                'unique:companies,email',
            ],
            'phone' => [
                'required',
                'string',
                'unique:companies,phone',
            ],
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('admin-companies-create');
    }
}
