<?php

namespace Modules\Admin\Http\Requests\Country;

use Illuminate\Foundation\Http\FormRequest;

class StoreCountryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'unique:countries,name',
            ],
            'iso_alpha_2' => [
                'required',
                'string',
                'unique:countries,iso_alpha_2',
                'max:2'
            ],
            'iso_alpha_3' => [
                'required',
                'string',
                'unique:countries,iso_alpha_3',
                'max:3'
            ],
            'numeric_code' => [
                'required',
                'string',
                'unique:countries,numeric_code',
            ]
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('admin-countries-create');
    }
}
