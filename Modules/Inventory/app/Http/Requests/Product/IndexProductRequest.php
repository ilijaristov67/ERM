<?php

namespace Modules\Inventory\Http\Requests\Product;

use App\Http\Requests\BaseIndexRequest;

class IndexProductRequest extends BaseIndexRequest
{
    private const array  SORTABLE = [
        'id',
        'name',
    ];

    /** @var list<string> */
    protected static array $sortArray = [];

    public function rules(): array
    {
        static::$sortArray = self::SORTABLE;

        return [
            'filter.id' => [
                'sometimes',
                'integer',
                'exists:products,id',
            ],
            'filter.name' => [
                'sometimes',
                'string',
            ],
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('inventory-products-read');
    }
}
