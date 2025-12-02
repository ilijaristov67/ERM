<?php

namespace Modules\Admin\Actions\Country;

use Lorisleiva\Actions\Concerns\AsAction;
use Modules\Admin\Http\Requests\Country\PatchCountryRequest;
use Modules\Admin\Http\Resources\Country\CountryResource;
use Modules\Admin\Models\Country\Country;

class PatchCountry
{
    use AsAction;

    public function handle(PatchCountryRequest $request, Country $country): CountryResource
    {
        $country->update($request->validated());
        return CountryResource::make($country);
    }
}
