<?php

namespace Aparedesv\LaravelMail;

use Illuminate\Support\ServiceProvider;

class LaravelMailServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom($this->basePath('routes/web.php'));
        $this->loadViewsFrom($this->basePath('resources/views'), 'laravelMail');
        
        $this->publishes([
            $this->basePath('resources/views') => resource_path('views/vendor/laravelMail')
        ], 'aparedesv-laravel-mail-views');
    }

    public function register()
    {
        $this->app->bind('laravelMail', function(){
            return 'hola';
        });

        // $this->mergeConfigFrom($this->basePath('config/laravelMail.php'), 'laravelMail');
    }

    protected function basePath($path = '')
    {
        return __DIR__.'/../'. $path;
    }
}