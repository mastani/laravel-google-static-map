<?php

namespace Mastani\GoogleStaticMap;

use Illuminate\Support\ServiceProvider;

class GoogleStaticMapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(GoogleStaticMap::class, function () {
            return new GoogleStaticMap();
        });

        $this->app->alias(GoogleStaticMap::class, 'google-static-map');
    }
}
