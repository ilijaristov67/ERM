<?php

namespace Modules\MasterData\Http\Requests\Location;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Modules\MasterData\Enums\Location\LocationTypeEnum;

class StoreLocationRequest extends FormRequest
{
    /**
     * @return array<string, array<int, string|\Illuminate\Contracts\Validation\Rule|bool>>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'unique:locations',
            ],
            'type' => [
                'required',
                'string',
                Rule::in(LocationTypeEnum::values()),
            ],
            'capacity' => [
                'required',
                'numeric',
                'gt:0',
            ],
            'is_virtual' => [
                'required',
                'boolean',
            ],
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('master-data-location-create');
    }
}
