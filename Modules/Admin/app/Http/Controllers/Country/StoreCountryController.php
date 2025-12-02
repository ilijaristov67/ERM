<?php

namespace Modules\Admin\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use Modules\Admin\Actions\Country\StoreCountry;
use Modules\Admin\Http\Requests\Country\StoreCountryRequest;
use Modules\Admin\Http\Resources\Country\CountryResource;

class StoreCountryController extends Controller
{
    public function __invoke(StoreCountryRequest $request): CountryResource
    {
        return  StoreCountry::run($request);
    }
}
