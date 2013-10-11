<?php namespace Dietervds\IronCache;

use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\Repository;

class IronCacheServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->app['cache']->extend('ironcache', function($app)
        {
            return new Repository(new IroncacheStore);
        });
    }

    public function register()
    {

    }
}