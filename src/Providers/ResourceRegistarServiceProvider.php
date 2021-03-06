<?php

namespace DanieleTulone\BaseCrud\Providers;

use Illuminate\Support\ServiceProvider;
use DanieleTulone\BaseCrud\Routing\ResourceRegistrar;

class ResourceRegistarServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $registrar = new ResourceRegistrar($this->app['router']);

        $this->app->bind('Illuminate\Routing\ResourceRegistrar', function () use ($registrar) {
            return $registrar;
        });
    }
}
