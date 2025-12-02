<?php

use Modules\Admin\Database\Seeders\Permission\PermissionSeeder;
use Modules\Admin\Models\Country\Country;
use Modules\Admin\Models\User\User;

dataset('country', [
    fn () => [
        'name' => 'name updated',
        'iso_alpha_2' => '21',
        'iso_alpha_3' => '321',
        'numeric_code' => '22',
    ],
]);

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'admin-countries-update';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.admin.countries.patch';

    $this->country =  Country::factory()->create([
        'name' => 'name',
        'iso_alpha_2' => '12',
        'iso_alpha_3' => '123',
        'numeric_code' => '11',
    ]);
})->with('country');

it('successfully patches country', function (array $data){
   $this->assertDatabaseHas('countries', [
       'id' => $this->country->id,
       'name' => 'name',
       'iso_alpha_2' => '12',
       'iso_alpha_3' => '123',
       'numeric_code' => '11',
   ]);

   $response = $this->patchJson(route($this->route, $this->country), $data);

   dd($response->json());
});
