<?php

namespace Iammarjamal\Startkit;

use Iammarjamal\Startkit\Commands\StartkitCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class StartkitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('startkit')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_startkit_table')
            ->hasCommand(StartkitCommand::class);
    }
}
