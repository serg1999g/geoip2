<?php

namespace App\Providers;

use GeoIp2\Database\Reader;
use Illuminate\Support\ServiceProvider;


class LocationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\Contracts\LocationServiceInterface', 'App\Services\LocationService');

        $this->app->bind('GeoIp2\Database\Reader', function () {
            return new Reader(public_path() . '/storage/' . config('geoip.get-ip'));
        });

        $this->app->bind('App\Services\Contracts\GeoIpClientInterface', 'App\Clients\GeoIpClient');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
