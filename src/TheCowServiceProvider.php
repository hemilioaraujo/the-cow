<?php

namespace Hemilioaraujo\TheCow;

use Hemilioaraujo\TheCow\Commands\TheCowCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TheCowServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('the-cow')
            ->hasRoute('web')
            ->hasViews('moo')
            ->hasCommand(TheCowCommand::class);
    }
}
