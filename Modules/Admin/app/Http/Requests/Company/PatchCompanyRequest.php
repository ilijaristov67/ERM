<?php

namespace Modules\Admin\Http\Requests\Company;

use App\Helpers\RequiredWithoutAllHelper;
use Illuminate\Foundation\Http\FormRequest;

class PatchCompanyRequest extends FormRequest
{
    private const array COLUMNS = [
        'name',
        'email',
        'phone',
    ];

    public function rules(): array
    {
        $requiredWithoutAll = new RequiredWithoutAllHelper(collect(self::COLUMNS));
        $company = $this->route('company');

        return [
            'name'=> [
                'nullable',
                'string',
                'required_without_all:' . $requiredWithoutAll->handle('name'),
            ],
            'email'=> [
                'nullable',
                'string',
                'unique:companies,email,' . $company->id,
                'required_without_all:' . $requiredWithoutAll->handle('email'),
            ],
            'phone'=> [
                'nullable',
                'string',
                'unique:companies,phone,'  . $company->id,
                'required_without_all:' . $requiredWithoutAll->handle('phone'),
            ]
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('admin-companies-update');
    }
}
