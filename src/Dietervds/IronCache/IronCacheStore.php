<?php namespace Dietervds\IronCache;

use Illuminate\Cache\StoreInterface;
use \IronCache;
use \Config;

class IroncacheStore implements StoreInterface {

    private $ironcache;

    public function __construct()
    {
        echo "<br/>Initting Ironcache connection";

        $token = Config::get('laravel4-ironcache::token');
        $projectId = Config::get('laravel4-ironcache::project_id');
        $cacheName = Config::get('laravel4-ironcache::cache_name');

        $this->ironcache = new IronCache(array(
            'token'         =>  $token,
            'project_id'    =>  $projectId
        ));
        $this->ironcache->setCacheName($cacheName);

        echo '<br/>Connected';
    }

    /**
     * Retrieve an item from the cache by key.
     *
     * @param  string  $key
     * @return mixed
     */
    public function get($key)
    {
        return $this->ironcache->get($key)->value;
    }

    /**
     * Store an item in the cache for a given number of minutes.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @param  int     $minutes
     * @return void
     */
    public function put($key, $value, $minutes)
    {
        $this->ironcache->put($key, $value);
    }

    /**
     * Increment the value of an item in the cache.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @return void
     */
    public function increment($key, $value = 1)
    {

    }

    /**
     * Decrement the value of an item in the cache.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @return void
     */
    public function decrement($key, $value = 1)
    {

    }

    /**
     * Store an item in the cache indefinitely.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @return void
     */
    public function forever($key, $value)
    {

    }

    /**
     * Remove an item from the cache.
     *
     * @param  string  $key
     * @return void
     */
    public function forget($key)
    {

    }

    /**
     * Remove all items from the cache.
     *
     * @return void
     */
    public function flush()
    {

    }

    /**
     * Get the cache key prefix.
     *
     * @return string
     */
    public function getPrefix()
    {

    }
}