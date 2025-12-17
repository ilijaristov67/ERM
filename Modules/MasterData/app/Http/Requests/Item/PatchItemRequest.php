<?php

namespace Modules\MasterData\Http\Requests\Item;

use App\Helpers\RequiredWithoutAllHelper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Modules\MasterData\Enums\Item\ItemTypeEnum;

class PatchItemRequest extends FormRequest
{
    private const array COLUMNS = [
        'name',
        'type',
    ];

    /**
     * @return array<string, array<int, string|\Illuminate\Contracts\Validation\Rule>>
     */
    public function rules(): array
    {
        $requiredWithoutAll = new RequiredWithoutAllHelper(collect(self::COLUMNS));

        return [
            'name' => [
                'nullable',
                'string',
                'unique:items',
                'required_without_all:'.$requiredWithoutAll->handle('name'),
            ],
            'type' => [
                'nullable',
                'string',
                Rule::in(ItemTypeEnum::values()),
                'required_without_all:'.$requiredWithoutAll->handle('type'),
            ],
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('master-data-items-update');
    }
}
