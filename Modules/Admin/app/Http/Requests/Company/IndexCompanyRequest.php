<?php

namespace Modules\Admin\Http\Requests\Company;

use App\Http\Requests\BaseIndexRequest;

class IndexCompanyRequest extends BaseIndexRequest
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

        return array_merge(parent::rules(), [
            'filter.id' => [
                'sometimes',
                'integer',
                'exists:companies,id',
            ],
            'filter.name' => [
                'sometimes',
                'string',
            ],
        ]);
    }

    public function authorize(): bool
    {
        return auth()->user()->can('admin-companies-read');
    }
}
