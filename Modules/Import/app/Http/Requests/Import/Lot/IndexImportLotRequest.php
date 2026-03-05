<?php

namespace Modules\Import\Http\Requests\Import\Lot;

use App\Http\Requests\BaseIndexRequest;

class IndexImportLotRequest extends BaseIndexRequest
{
    private const array  SORTABLE = [
        'id',
        'user_id',
        'location_id',
        'arrived_at',
        'import_id',
    ];

    public function rules(): array
    {
        static::$sortArray = self::SORTABLE;

        return array_merge(parent::rules(), [
            'filter.id' => [
                'sometimes',
                'integer',
                'exists:import_lots,id',
            ],
            'filter.location_id' => [
                'sometimes',
                'integer',
                'exists:locations,id',
            ],
            'filter.user_id' => [
                'sometimes',
                'integer',
                'exists:users,id',
            ],
            'filter.arrived_at' => [
                'sometimes',
                'string',
            ],
        ]);
    }

    public function authorize(): bool
    {
        return auth()->user()->can('import-lots-read');
    }
}
