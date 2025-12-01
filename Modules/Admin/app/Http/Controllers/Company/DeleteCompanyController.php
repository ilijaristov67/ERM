<?php

namespace Modules\Admin\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessfulOperationMessageResource;
use Modules\Admin\Actions\Company\DeleteCompany;
use Modules\Admin\Models\Company\Company;

class DeleteCompanyController extends Controller
{
    public function __invoke(Company $company): SuccessfulOperationMessageResource
    {
        return DeleteCompany::run($company);
    }
}
