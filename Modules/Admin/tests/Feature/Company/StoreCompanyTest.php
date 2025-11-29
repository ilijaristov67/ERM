<?php

use Modules\Admin\Database\Seeders\Permission\PermissionSeeder;
use Modules\Admin\Models\User\User;

beforeEach(function () {
    $this->seed(PermissionSeeder::class);

    $this->permission = 'admin-companies-create';
    $this->user = User::factory()->create();
    $this->user->givePermissionTo($this->permission);
    $this->actingAs($this->user);
    $this->token = JWTAuth::fromUser($this->user);
    $this->withHeader('Authorization', 'Bearer '.$this->token);
    $this->routeName = 'api.admin.companies.store';
});

it('successfully stores company', function () {
    $response = $this->postJson(route($this->routeName, [

    ]));

    dd($response->json());
});
