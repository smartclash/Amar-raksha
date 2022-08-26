<?php

namespace App\Providers;

use App\Enums\Role;
use Illuminate\Support\ServiceProvider;
use Twilio\Rest\Client;

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
        \Blade::if('admin', function () {
            return auth()->user()->role == Role::ADMIN;
        });

        \Blade::if('institution', function () {
            return auth()->user()->role == Role::INSTITUTION;
        });

        \Blade::if('volunteer', function () {
            return auth()->user()->role == Role::VOLUNTEER;
        });

        $this->app->bind('twilio', function () {
            return new Client(
                config('services.twilio.sid'),
                config('services.twilio.token')
            );
        });
    }
}
