<?php

namespace Modules\Admin\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use Modules\Admin\Actions\Country\IndexCountry;
use Modules\Admin\Http\Requests\Country\IndexCountryRequest;
use Modules\Admin\Http\Resources\Country\CountryResourceCollection;

class IndexCountryController extends Controller
{
    public function __invoke(IndexCountryRequest $request): CountryResourceCollection
    {
        return IndexCountry::run($request);
    }
}
