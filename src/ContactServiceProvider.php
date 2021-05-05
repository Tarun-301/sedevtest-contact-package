<?php

namespace Sedevtest\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/config/contact.php', 'contact');

        
        // when users of your package execute Laravel's vendor:publish command, 
        //your file will be copied to the specified publish location. Once your configuration has been published, 
        //its values may be accessed like any other configuration file:
        //     $value = config('courier.option');
        //Eg of publish config cpntact.php like this we can publish views, lang etc.

        $this->publishes([
            __DIR__ . '/config/contact.php'=>config_path('contact.php'),
        ]);

    }

    public function register()
    {
        
    }

}