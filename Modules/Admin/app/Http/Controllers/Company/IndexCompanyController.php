<?php

namespace Modules\Admin\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Modules\Admin\Actions\Company\IndexCompany;
use Modules\Admin\Http\Requests\Company\IndexCompanyRequest;
use Modules\Admin\Http\Resources\Company\CompanyResourceCollection;

class IndexCompanyController extends Controller
{
    public function __invoke(IndexCompanyRequest $request): CompanyResourceCollection
    {
        return IndexCompany::run($request);
    }
}
