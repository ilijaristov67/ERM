<?php

namespace Modules\Inventory\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /** @return array<array<string>> */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'unique:products,name',
            ],
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('inventory-products-create');
    }
}
