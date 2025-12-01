<?php

namespace Modules\Admin\Actions\Company;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Admin\Http\Requests\Company\PatchCompanyRequest;
use Modules\Admin\Http\Resources\Company\CompanyResource;
use Modules\Admin\Models\Company\Company;

class PatchCompany
{
    use AsAction;

    public function handle(PatchCompanyRequest $request, Company $company): CompanyResource
    {
        $company->update($request->validated());

        return CompanyResource::make($company);
    }
}
