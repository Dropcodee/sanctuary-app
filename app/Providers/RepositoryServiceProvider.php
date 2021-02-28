<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Interfaces\DepartmentInterface',
            'App\Repositories\DepartmentRepository'
        );
        $this->app->bind(
            'App\Interfaces\ProspectiveInterface',
            'App\Repositories\ProspectiveRepository'
        );
        $this->app->bind(
            'App\Interfaces\ExcoInterface',
            'App\Repositories\ExcoRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
