<?php

namespace App\Providers;

use App\Http\Resources\SuccessfulOperationMessageResource;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::before(function ($user, $ability) {
            return $user->hasRole(config('admin.super_admin_role')) ? true : null;
        });

        SuccessfulOperationMessageResource::withoutWrapping();
    }
}
