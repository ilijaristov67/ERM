<?php

namespace Modules\Import\Http\Requests\Import;

use Illuminate\Foundation\Http\FormRequest;

class StoreImportRequest extends FormRequest
{
    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'user_id' => [
                'required',
                'integer',
                'exists:users,id',
            ],
            'import_date' => [
                'required',
                'date',
                'date_format:'.config('constants.front_end_date_format'),
            ],
            'supplier_id' => [
                'required',
                'integer',
                'exists:suppliers,id',
            ],
            'invoice_id' => [
                'required',
                'integer',
                'exists:invoices,id',
            ],
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('import-create');
    }

    public function prepareForValidation(): void
    {
        $this->merge([
            'user_id' => auth()->id(),
        ]);
    }
}
