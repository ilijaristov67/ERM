<?php

namespace Modules\Admin\Actions\Country;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Admin\Http\Requests\Country\StoreCountryRequest;
use Modules\Admin\Http\Resources\Country\CountryResource;
use Modules\Admin\Models\Country\Country;

class StoreCountry
{
    use AsAction;

    public function handle(StoreCountryRequest $request): CountryResource
    {
        $country = Country::query()->create($request->validated());

        return CountryResource::make($country);
    }
}
