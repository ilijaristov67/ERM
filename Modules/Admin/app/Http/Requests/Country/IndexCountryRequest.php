<?php

namespace Modules\Admin\Http\Requests\Country;

use App\Http\Requests\BaseIndexRequest;

class IndexCountryRequest extends BaseIndexRequest
{
    private const array  SORTABLE = [
        'id',
        'name',
        'iso_alpha_2',
        'iso_alpha_3',
        'numeric_code',
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
                'exists:countries,id',
            ],
            'filter.name' => [
                'sometimes',
                'string',
            ],
            'filter.iso_alpha_2' => [
                'sometimes',
                'string',
            ],
            'filter.iso_alpha_3' => [
                'sometimes',
                'string',
            ],
            'filter.numeric_code' => [
                'sometimes',
                'string',
            ],
        ]);
    }

    public function authorize(): bool
    {
        return auth()->user()->can('admin-countries-read');
    }
}
