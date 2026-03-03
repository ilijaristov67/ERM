<?php

namespace App\Http\Requests;

use App\Helpers\ArraySortHelper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BaseIndexRequest extends FormRequest
{
    /** @var list<string> */
    protected static array $sortArray = [];

    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, array<int,mixed>>
     */
    public function rules(): array
    {
        $sortable = new ArraySortHelper(collect(static::$sortArray));

        return [
            'page' => ['integer', 'required'],
            'limit' => ['integer', 'required'],
            'filter' => ['sometimes',
                /** The value must be a string or array */
                function ($attribute, $value, $fail) {
                    if (! is_string($value) && ! is_array($value)) {
                        $fail(__('Attribute must be a string or an array.', ['attribute' => $attribute]));
                    }
                },
            ],
            'filter.id' => ['sometimes', 'integer'],
            /** accepted values: with, only */
            'sort' => ['sometimes', 'array'],
            'sort.*' => [
                'sometimes',
                'string',
                Rule::in($sortable->handle()),
            ],
        ];
    }

    /** @return array<string, array<string, array<string>|int|string>> */
    public function queryParameters(): array
    {
        return [
            'page' => [
                'description' => __('Page number for pagination. Defaults to ').config('admin.default_first_page', 1),
                'example' => 1,
            ],
            'limit' => [
                'description' => __('Number of users per page. Defaults to ').config('admin.default_page_limit', 10),
                'example' => 10,
            ],
            'filter' => [
                'description' => __('Search term to filter by. Defaults to an empty string.'),
                'example' => 'john',
            ],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'page' => $this->get('page', config('admin.default_first_page', 1)),
            'limit' => $this->get('limit', config('admin.default_page_limit', 10)),
            'filter' => $this->get('filter') ?? '',
        ]);
    }
}
