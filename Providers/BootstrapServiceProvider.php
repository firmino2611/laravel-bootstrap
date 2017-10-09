<?php

namespace Firmino\Bootstrap\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Firmino\Bootstrap\Formulario;
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

        $this->app->singleton('Bootstrap.html', function(){
            return new HTML();
        });
    }
}
