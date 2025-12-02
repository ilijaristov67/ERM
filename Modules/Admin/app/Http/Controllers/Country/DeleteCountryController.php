<?php

namespace Modules\Admin\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessfulOperationMessageResource;
use Modules\Admin\Actions\Country\DeleteCountry;
use Modules\Admin\Models\Country\Country;

class DeleteCountryController extends Controller
{
    public function __invoke(Country $country): SuccessfulOperationMessageResource
    {
        return DeleteCountry::run($country);
    }
}
