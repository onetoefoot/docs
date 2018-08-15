<?php

namespace Onetoefoot\Docs;

use Illuminate\Support\ServiceProvider;

class DocsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

        // php artisan vendor:publish --provider="Onetoefoot\Docs\DocsServiceProvider" --tag="config"
        $this->publishes([
            __DIR__.'/../config/docs.php' => config_path('docs.php'),
        ], 'config');
        $this->mergeConfigFrom(__DIR__.'/../config/docs.php', 'docs');

        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'docs');
    }
}
