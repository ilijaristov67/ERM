<?php

namespace Modules\Import\Http\Requests\Import\Lot\Item;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreImportLotItemRequest extends FormRequest
{
    /**
     * @return array<string, array<int, string, Rule>>
     */
    public function rules(): array
    {
        return [
            'import_lot_id' => [
                'required',
                'integer',
                'exists:import_lots,id',
            ],
            'item_id' => [
                'required',
                'integer',
                'exists:items,id',
                Rule::unique('import_lot_item', 'item_id')->where('import_lot_id', $this->integer('import_lot_id')),
            ],
            'quantity' => [
                'required',
                'numeric',
                'gt:0',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'item_id.unique' => 'Item already exists for this import lot.',
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('import-lot-items-create');
    }
}
