<?php

namespace Modules\MasterData\Http\Requests\Item;

use App\Http\Requests\BaseIndexRequest;

class IndexItemRequest extends BaseIndexRequest
{
    private const array  SORTABLE = [
        'id',
        'name',
        'type',
        'code',
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
                'exists:items,id',
            ],
            'filter.name' => [
                'sometimes',
                'string',
            ],
            'filter.type' => [
                'sometimes',
                'string',
            ],
            'filter.code' => [
                'sometimes',
                'string',
            ],
        ]);
    }

    public function authorize(): bool
    {
        return auth()->user()->can('master-data-items-read');
    }
}
