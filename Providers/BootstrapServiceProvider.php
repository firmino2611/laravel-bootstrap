<?php

namespace Firmino\Bootstrap\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Firmino\Bootstrap\Formulario;
use Firmino\Bootstrap\Support\Form;
use Firmino\Bootstrap\HTML;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Templates', 'Bootstrap');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Bootstrap.formulario', function(){
            return new Formulario();
        });

        $this->app->singleton('Bootstrap.form', function(){
            return new Form();
        });

        $this->app->singleton('Bootstrap.html', function(){
            return new HTML();
        });
    }
}
