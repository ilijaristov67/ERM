<?php

namespace Modules\Admin\Database\Seeders\Country;

use App\Helpers\CsvToArrayHelper;
use Illuminate\Database\Seeder;
use Modules\Admin\Models\Country\Country;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $csv = __DIR__.'/../Csv/countries.csv';
        $csvToArrayHelper = new CsvToArrayHelper($csv);

        $countries = $csvToArrayHelper->handle();

        collect($countries)->each(function ($country) {
            Country::query()->firstOrCreate([
                'iso_alpha_3' => $country['iso_alpha_3'],
            ], [
                'name' => $country['name'],
                'iso_alpha_2' => $country['iso_alpha_2'],
                'numeric_code' => $country['numeric_code'],
            ]);
        });
    }
}
