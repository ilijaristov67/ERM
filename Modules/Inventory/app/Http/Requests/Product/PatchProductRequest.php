<?php

namespace Modules\Inventory\Http\Requests\Product;

use App\Helpers\RequiredWithoutAllHelper;
use Illuminate\Foundation\Http\FormRequest;

class PatchProductRequest extends FormRequest
{
    private const array COLUMNS = [
        'name',
    ];

    public function rules(): array
    {
        $requiredWithoutAll = new RequiredWithoutAllHelper(collect(self::COLUMNS));
        $product = $this->route('product');

        return [
            'name' => [
                'nullable',
                'string',
                'unique:products,name,'  . $product->id,
                'required_without_all:'.$requiredWithoutAll->handle('name'),
            ]
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('inventory-products-update');
    }
}
