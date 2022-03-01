<?php

namespace Valentinceaprazaru\BinanceApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Valentinceaprazaru\BinanceApi\Commands\BinanceApiCommand;

class BinanceApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('binance-api')
            ->hasConfigFile()
//            ->hasViews()
//            ->hasMigration('create_binance-api_table')
            ->hasCommand(BinanceApiCommand::class);
    }
}
