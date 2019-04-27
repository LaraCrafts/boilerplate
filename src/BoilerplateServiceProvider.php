<?php

namespace LaraCrafts\Boilerplate;

use Illuminate\Support\ServiceProvider;

class BoilerplateServiceProvider extends ServiceProvider
{
    /**
     * Boot package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/boilerplate.php', 'boilerplate');
    }

    /**
     * Register package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('boilerplate', function () {
            return new Support\Facades\Boilerplate();
        });
    }
}
