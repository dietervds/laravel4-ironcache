<?php namespace Dietervds\IronCache;

use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\Repository;

class IronCacheServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    

    public function boot()
    {
        $this->package('dietervds/laravel4-ironcache');

        $this->app['cache']->extend('ironcache', function($app)
        {
            return new Repository(new IroncacheStore($this->app['config']['cache.prefix']));
        });
    }

    public function register()
    {

    }
}