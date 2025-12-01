<?php

namespace Modules\Admin\Actions\Company;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Admin\Http\Requests\Company\IndexCompanyRequest;
use Modules\Admin\Http\Resources\Company\CompanyResourceCollection;
use Modules\Admin\Models\Company\Company;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class IndexCompany
{
    use AsAction;

    public function handle(IndexCompanyRequest $request): CompanyResourceCollection
    {
        $companies = QueryBuilder::for(Company::class)
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::partial('name'),
            ])
            ->allowedSorts([
                'id',
                'name',
            ])
            ->defaultSort('id')
            ->paginate(
                perPage: $request->input('limit'),
                page: $request->input('page')
            );

        return CompanyResourceCollection::make($companies);
    }
}
