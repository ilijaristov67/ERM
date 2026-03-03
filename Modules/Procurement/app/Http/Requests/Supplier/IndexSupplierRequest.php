<?php

namespace Modules\Procurement\Http\Requests\Supplier;

use App\Http\Requests\BaseIndexRequest;

class IndexSupplierRequest extends BaseIndexRequest
{
    private const array SORTABLE = [
        'id',
        'name',
    ];

    /** @var list<string> */
    protected static array $sortArray = [];

    public function rules(): array
    {
        static::$sortArray = self::SORTABLE;

        return array_merge(parent::rules(), [
            'filter.id' => [
                'sometimes',
                'integer',
                'exists:suppliers,id',
            ],
            'filter.name' => [
                'sometimes',
                'string',
            ],

        ]);
    }

    public function authorize(): bool
    {
        return auth()->user()->can('procurement-suppliers-read');
    }
}
