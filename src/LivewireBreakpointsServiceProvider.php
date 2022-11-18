<?php

namespace Ekremogul\LivewireBreakpoints;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ekremogul\LivewireBreakpoints\Commands\LivewireBreakpointsCommand;

class LivewireBreakpointsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('livewire-breakpoints')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_livewire-breakpoints_table')
            ->hasCommand(LivewireBreakpointsCommand::class);
    }
}
