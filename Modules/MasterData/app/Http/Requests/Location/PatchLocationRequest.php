<?php

namespace Modules\MasterData\Http\Requests\Location;

use App\Helpers\RequiredWithoutAllHelper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Modules\MasterData\Enums\Location\LocationTypeEnum;

class PatchLocationRequest extends FormRequest
{
    private const array COLUMNS = [
        'name',
        'type',
        'capacity',
        'is_virtual',
    ];

    public function rules(): array
    {
        $locationId = $this->route('location')->id;
        $requiredWithoutAll = new RequiredWithoutAllHelper(collect(self::COLUMNS));

        return [
            'name' => [
                'nullable',
                'string',
                'unique:locations,name,'.$locationId,
                'required_without_all:'.$requiredWithoutAll->handle('name'),
            ],
            'type' => [
                'nullable',
                'string',
                Rule::in(LocationTypeEnum::values()),
                'required_without_all:'.$requiredWithoutAll->handle('type'),
            ],

        ];
    }

    public function authorize(): bool
    {
        return auth()->user()->can('master-data-locations-update');
    }
}
