<?php

// brifiction\EntwurfhausContact\src\ContactFormServiceProvider.php
namespace brifiction\EntwurfhausContact;

use Illuminate\Support\ServiceProvider;

class EntwurfhausContactServiceProvider extends ServiceProvider
{
    /**
     * php artisan vendor:publish -tag=entwurfhaus-contact-config
     */

    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'entwurfhaus-contact');
        // $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/entwurfhaus-contact'),
        ], 'views');
        $this->publishes([
            __DIR__ . '/config/_entwurfhaus_contact.php' => config_path('_entwurfhaus_contact.php'),
        ], 'config');
    }

    /**
     * Make config publish optional by merging the config from the package.
     *
     * @return  void
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function register()
    {
        // $this->app->make('brifiction\EntwurfhausContact\EntwurfhausContactController');
        // $this->mergeConfigFrom(
        //   __DIR__.'/config/_entwurfhaus_contact.php', 'entwurfhaus_contact'
        // );
    }
}
