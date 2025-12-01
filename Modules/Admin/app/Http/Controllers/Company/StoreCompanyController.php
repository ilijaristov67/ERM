<?php

namespace Modules\Admin\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Modules\Admin\Actions\Company\StoreCompany;
use Modules\Admin\Http\Requests\Company\StoreCompanyRequest;
use Modules\Admin\Http\Resources\Company\CompanyResource;

class StoreCompanyController extends Controller
{
    public function __invoke(StoreCompanyRequest $request): CompanyResource
    {
        return StoreCompany::run($request);
    }
}
