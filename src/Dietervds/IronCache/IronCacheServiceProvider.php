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
    }

    public function register()
    {
        $this->app['cache']->extend('ironcache', function($app)
        {
            $prefix = $this->app['config']->get('cache.prefix');
            $config = $this->app['config']->get('laravel4-ironcache::config');
            
            return new Repository(new IroncacheStore($prefix, $config));
        });
    }
}