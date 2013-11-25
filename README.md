laravel-ironcache
=================

Implements IronCache (http://www.iron.io/cache) as a Laravel 4 cache driver.


##Installation
Add laravel4-ironcache to your composer.json file:

```
"require": {
  "dietervds/laravel4-ironcache": "dev-master"
}
```

Run composer to pull it in:

```
$ composer update
```

Add the service provider in `app/config/app.php`:

    'Dietervds\IronCache\IronCacheServiceProvider',

##Configuration

Publish the package-specific configuration file:

    php artisan config:publish dietervds/laravel4-ironcache

This will create a configuration file in `app/config/packages/dietervds/laravel4-ironcache/config.php`.  
Open it and give it the neccesary Iron.io credentials and cache name.

Set your cache driver in `app/config/cache.php`:

    'driver' => 'ironcache',

##Usage
Once the above steps are complete, you can use Ironcache as you would any cache function in Laravel.  
More on how to do this, check out the Laravel cache documentation: http://laravel.com/docs/cache

##Feedback
This is my first own open-source package, so any feedback is even more welcomed then it otherwise is.  
I'm looking to learn from this, so don't be shy!
