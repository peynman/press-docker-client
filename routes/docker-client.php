<?php

use Illuminate\Support\Facades\Route;
use Larapress\DockerClient\Services\OPCache\OpCacheDataModel;

Route::middleware(config('larapress.crud.web-middlewares'))
    ->prefix(config('larapress.pages.prefix'))
    ->group(function () {
        if (config('larapress.docker-client.opcache.status_url')) {
            Route::get(config('larapress.docker-client.opcache.status_url'), function () {
                return view(config('larapress.docker-client.opcache.status_view'), [
                    'dataModel' => new OpCacheDataModel(),
                ]);
            })->name('app.'.config('larapress.docker-client.opcache.view_permission'));
        }
    });
