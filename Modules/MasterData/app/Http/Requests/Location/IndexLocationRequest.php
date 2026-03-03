<?php

namespace Modules\MasterData\Http\Requests\Location;

use App\Http\Requests\BaseIndexRequest;

class IndexLocationRequest extends BaseIndexRequest
{
    private const array SORTABLE = [
        'id',
        'name',
        'type',
        'capacity',
        'is_virtual',
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
                'exists:locations,id',
            ],
            'filter.name' => [
                'sometimes',
                'string',
            ],
            'filter.type' => [
                'sometimes',
                'string',
            ],
            'filter.capacity' => [
                'sometimes',
                'string',
            ],
            'filter.is_virtual' => [
                'sometimes',
                'boolean',
            ],
        ]);
    }

    public function authorize(): bool
    {
        return auth()->user()->can('master-data-locations-read');
    }
}
