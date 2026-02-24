<?php

namespace Modules\Import\Http\Requests\Import;

use App\Http\Requests\BaseIndexRequest;

class IndexImportRequest extends BaseIndexRequest
{
    private const array  SORTABLE = [
        'id',
        'number',
        'user_id',
        'import_date',
        'created_at',
        'updated_at',
    ];

    public function rules(): array
    {
        static::$sortArray = self::SORTABLE;

        return array_merge(parent::rules(), [
            'filter.id' => [
                'sometimes',
                'integer',
                'exists:imports,id',
            ],
            'filter.number' => [
                'sometimes',
                'string',
            ],
            'filter.user_id' => [
                'sometimes',
                'integer',
                'exists:users,id',
            ],
            'filter.import_date' => [
                'sometimes',
                'string',
            ],
        ]);
    }

    public function authorize(): bool
    {
        return auth()->user()->can('import-read');
    }
}
