<?php

namespace Modules\Admin\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Modules\Admin\Actions\Company\PatchCompany;
use Modules\Admin\Http\Requests\Company\PatchCompanyRequest;
use Modules\Admin\Http\Resources\Company\CompanyResource;
use Modules\Admin\Models\Company\Company;

class PatchCompanyController extends Controller
{
    public function __invoke(PatchCompanyRequest $request, Company $company): CompanyResource
    {
        return PatchCompany::run($request, $company);
    }
}
