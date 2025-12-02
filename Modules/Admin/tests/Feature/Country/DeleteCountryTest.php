<?php

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'admin-countries-update';

    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);

    $this->actingAs($this->user);

    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);

    $this->route = 'api.admin.countries.patch';

    $this->country = Country::factory()->create([
        'name' => 'name',
        'iso_alpha_2' => '12',
        'iso_alpha_3' => '123',
        'numeric_code' => '11',
    ]);
})->with('country');
