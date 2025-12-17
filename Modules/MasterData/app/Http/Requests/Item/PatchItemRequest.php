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
        'weight'
    ];

    /**
     * @return array<string, array<int, string|\Illuminate\Contracts\Validation\Rule>>
     */
    public function rules(): array
    {
        $requiredWithoutAll = new RequiredWithoutAllHelper(collect(self::COLUMNS));
        $item = $this->route('item');

        return [
            'name' => [
                'nullable',
                'string',
                'unique:items,name,'.$item->id,
                'required_without_all:'.$requiredWithoutAll->handle('name'),
            ],
            'type' => [
                'nullable',
                'string',
                Rule::in(ItemTypeEnum::values()),
                'required_without_all:'.$requiredWithoutAll->handle('type'),
            ],
            'weight' => [
                'nullable',
                'string',
                'required_without_all:'.$requiredWithoutAll->handle('weight'),
            ]
        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('master-data-items-update');
    }
}
