<?php

namespace Modules\Admin\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use Modules\Admin\Actions\Country\PatchCountry;
use Modules\Admin\Http\Requests\Country\PatchCountryRequest;
use Modules\Admin\Http\Resources\Country\CountryResource;
use Modules\Admin\Models\Country\Country;

class PatchCountryController extends Controller
{
    public function __invoke(PatchCountryRequest $request, Country $country): CountryResource
    {
        return PatchCountry::run($request, $country);
    }
}
