<?php

namespace Modules\MasterData\Http\Requests\Item;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Modules\MasterData\Enums\Item\ItemTypeEnum;

class StoreItemRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'unique:items'
            ],
            'type' => [
                'required',
                'string',
                Rule::in(ItemTypeEnum::values())
            ]
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('master-data-items-create');
    }
}
