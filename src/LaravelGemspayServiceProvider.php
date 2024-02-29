<?php

namespace Sirval\LaravelGemspay;

use Sirval\LaravelGemspay\Commands\LaravelGemspayCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelGemspayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-gemspay')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-gemspay_table')
            ->hasCommand(LaravelGemspayCommand::class);
    }
}
