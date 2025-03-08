<?php

namespace Ainur\Repository;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ainur\Repository\Commands\RepositoryCommand;

class RepositoryServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-repository-pattern')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_repository_pattern_table')
            ->hasCommand(RepositoryCommand::class);
    }
}
