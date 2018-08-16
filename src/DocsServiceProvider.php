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

        $sourcePath = __DIR__.'/resources/views';

        $this->publishes([
            $sourcePath => $destinationPath
        ], 'view');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/docs';
        }, \Config::get('view.paths')), [$sourcePath]), 'docs');

    }
}
