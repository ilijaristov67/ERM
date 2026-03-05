<?php

namespace Modules\Import\Http\Requests\Import\Lot;

use Illuminate\Foundation\Http\FormRequest;

class PatchImportLotRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'location_id' => [
                'required',
                'integer',
                'exists:locations,id',
            ],
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('import-lots-update');
    }
}
