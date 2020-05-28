<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define ('edit-company', function ($user, $company){
            return $user->id === $company->user_id;
        });

        Gate::define ('delete', function ($user, $company){
            return $user->id === $company->user_id;
        });

        Gate::define ('add-company', function ($user, $company){
            return $user->id === $company->user_id;
        });

        Gate::define ('store-company', function ($user, $company){
            return $user->id === $company->user_id;
        });

    }
}
