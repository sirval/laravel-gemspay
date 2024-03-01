<?php

namespace Sirval\Gemspay;

use Illuminate\Support\ServiceProvider;
use Sirval\Gemspay\Facades\Gemspay;

class GemspayServiceProvider extends ServiceProvider
{
    /*
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Let's publish all the config file this package needs to work with
     */
    public function boot()
    {
        $config = realpath(__DIR__.'/../config/gemspay.php');

        $this->publishes([
            $config => config_path('gemspay.php'),
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind('laravel-gemspay', function () {

            return new Gemspay;

        });
    }

    /**
     * Get the services provided by the provider
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-gemspay'];
    }
}
