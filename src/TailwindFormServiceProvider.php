<?php

namespace Shirish71\TailwindForm;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class TailwindFormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'tailwind-form');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'tailwind-form');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('tailwind-form.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../../resources/views' => base_path('resources/views/vendor/form-components'),
            ], 'views');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.' /../resources / views' => resource_path('views / vendor / tailwind - form'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.' /../resources / assets' => public_path('vendor / tailwind - form'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.' /../resources / lang' => resource_path('lang / vendor / tailwind - form'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'form-components');

        $prefix = config('form-components.prefix');

        Collection::make(config('form-components.components'))->each(
            fn($component, $alias) => Blade::component($alias, $component['class'], $prefix)
        );
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.' /../config/config.php', 'tailwind-form');

        // Register the main class to use with the facade
        $this->app->singleton('tailwind-form', function () {
            return new TailwindForm;
        });
    }
}
