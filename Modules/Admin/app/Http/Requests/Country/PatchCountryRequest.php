<?php

namespace Modules\Admin\Http\Requests\Country;

use App\Helpers\RequiredWithoutAllHelper;
use Illuminate\Foundation\Http\FormRequest;

class PatchCountryRequest extends FormRequest
{
    private const array COLUMNS = [
        'name',
        'iso_alpha_2',
        'iso_alpha_3',
        'numeric_code',
    ];

    public function rules(): array
    {
        $requiredWithoutAll = new RequiredWithoutAllHelper(collect(self::COLUMNS));
        $country = $this->route('country');

        return [
            'name' => [
                'nullable',
                'string',
                'unique:countries,name,'.$country->id,
                'required_without_all:'.$requiredWithoutAll->handle('name'),
            ],
            'iso_alpha_2' => [
                'nullable',
                'string',
                'unique:countries,iso_alpha_2,'.$country->id,
                'max:2',
                'required_without_all:'.$requiredWithoutAll->handle('iso_alpha_2'),
            ],
            'iso_alpha_3' => [
                'nullable',
                'string',
                'unique:countries,iso_alpha_3,'.$country->id,
                'max:3',
                'required_without_all:'.$requiredWithoutAll->handle('iso_alpha_3'),
            ],
            'numeric_code' => [
                'nullable',
                'string',
                'unique:countries,numeric_code,'.$country->id,
                'required_without_all:'.$requiredWithoutAll->handle('numeric_code'),
            ],
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('admin-countries-update');
    }
}
