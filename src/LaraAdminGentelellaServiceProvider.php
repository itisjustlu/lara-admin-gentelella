<?php

namespace LucasRuroken\LaraAdmin\Gentelella;

use Illuminate\Support\ServiceProvider;

class LaraAdminGentelellaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishAssets();
        $this->registerViews();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function publishAssets()
    {
        // Custom css
        $this->publishes([
            __DIR__.'/../../../bower-asset/gentelella/build/css/custom.min.css' => public_path('assets/css/custom.min.css'),
        ], 'lara-admin-gentelella-assets');

        // Custom js
        $this->publishes([
            __DIR__.'/../../../bower-asset/gentelella/build/js/custom.min.js' => public_path('assets/js/custom.min.js'),
        ], 'lara-admin-gentelella-assets');

        // Publish all vendors
        $this->publishes([
            __DIR__.'/../../../bower-asset/gentelella/vendors' => public_path('assets/vendors'),
        ], 'lara-admin-gentelella-assets');

        // Publish images
        $this->publishes([
            __DIR__.'/../../../bower-asset/gentelella/production/images' => public_path('assets/images'),
        ], 'lara-admin-gentelella-assets');
    }

    private function registerViews()
    {
        $this->loadViewsFrom(__DIR__ . '/Views', 'gentelella');
    }
}
