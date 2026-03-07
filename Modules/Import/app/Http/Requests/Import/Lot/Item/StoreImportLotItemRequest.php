<?php

namespace Modules\Import\Http\Requests\Import\Lot\Item;

use Illuminate\Foundation\Http\FormRequest;

class StoreImportLotItemRequest extends FormRequest
{
    /**
     * @return array<string, array<int, string>>
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
            ],
            'quantity' => [
                'required',
                'string',
                'min:1',
            ],
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('import-lot-items-create');
    }
}
