<?php

namespace Modules\Admin\Actions\Company;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Admin\Http\Requests\Company\StoreCompanyRequest;
use Modules\Admin\Http\Resources\Company\CompanyResource;
use Modules\Admin\Models\Company\Company;

class StoreCompany
{
    use AsAction;

    public function handle(StoreCompanyRequest $request): CompanyResource
    {
        $company = Company::query()->create($request->validated());
        dd($company);
    }
}
