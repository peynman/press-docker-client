<?php

use Illuminate\Support\Facades\Route;
use Larapress\DockerClient\Services\OPCache\OpCacheDataModel;

Route::middleware(config('larapress.crud.middlewares'))
    ->prefix(config('larapress.pages.prefix'))
    ->group(function () {
        if (config('larapress.docker-config.opcache.status-url')) {
            Route::get(config('larapress.docker-client.opcache.status-url'), function () {
                return view(config('larapress.docker-config.opcache.status-view'), [
                    'dataModel' => new OpCacheDataModel(),
                ]);
            });
        }
    });
