<?php

namespace Larapress\DockerClient\Providers;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'larapress-docker-client');
        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'larapress');
        $this->loadRoutesFrom(__DIR__.'/../../routes/docker-client.php');
        $this->publishes([
            __DIR__.'/../../config/docker-client.php' => config_path('larapress/docker-client.php'),
        ], ['config', 'larapress', 'larapress-docker-client']);
    }
}
