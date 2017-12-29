<?php

namespace Oulkadi\Laravelcrud;

use Illuminate\Support\ServiceProvider;

class LaravelcrudServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
        $this->loadViewsFrom(__DIR__.'/views','laravelcrud');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Oulkadi\Laravelcrud\LaravelcrudController');
    }
}
