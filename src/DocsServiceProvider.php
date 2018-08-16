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
        $this->registerConfig();
        $this->registerViews();
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../config/docs.php' => config_path('docs.php'),
        ], 'config');
        $this->mergeConfigFrom(__DIR__.'/../config/docs.php', 'docs');
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $destinationPath = base_path('resources/views/docs');
        $path = __DIR__.'/resources/views';
        $this->publishes([
            $path => $destinationPath
        ], 'view');

        if (config('docs.views_enabled')) {
            $path = base_path('resources/views') . config('docs.views_path');
        }

        $this->loadViewsFrom($path, 'docs');

    }
}
