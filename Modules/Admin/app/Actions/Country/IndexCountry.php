<?php

namespace Modules\Admin\Actions\Country;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Admin\Http\Requests\Country\IndexCountryRequest;
use Modules\Admin\Http\Resources\Country\CountryResourceCollection;
use Modules\Admin\Models\Country\Country;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class IndexCountry
{
    use AsAction;

    public function handle(IndexCountryRequest $request): CountryResourceCollection
    {
        $countries = QueryBuilder::for(Country::class)
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::partial('name'),
                AllowedFilter::partial('iso_alpha_2'),
                AllowedFilter::partial('iso_alpha_3'),
                AllowedFilter::partial('numeric_code'),
            ])
            ->allowedSorts([
                'id',
                'name',
                'iso_alpha_2',
                'iso_alpha_3',
                'numeric_code',
            ])
            ->defaultSort('-id')
            ->paginate(
                perPage: $request->input('limit'),
                page: $request->input('page')
            );

        return CountryResourceCollection::make($countries);
    }
}
