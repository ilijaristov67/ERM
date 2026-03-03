<?php

namespace Modules\Import\Http\Requests\Import\Lot;

use Illuminate\Foundation\Http\FormRequest;

class StoreImportLotRequest extends FormRequest
{
    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'import_id' => [
                'required',
                'integer',
                'exists:imports,id',
            ],
            'location_id' => [
                'required',
                'integer',
                'exists:locations,id',
            ],
            'user_id' => [
                'required',
                'integer',
                'exists:users,id',
            ],
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('import-lots-create');
    }

    public function prepareForValidation(): void
    {
        $this->merge([
            'user_id' => auth()->id(),
        ]);
    }
}
