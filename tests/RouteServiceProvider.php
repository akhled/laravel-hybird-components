<?php

namespace Akhaled\HybridComponents\Tests;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Asset/views', 'test-view');
        $this->loadRoutesFrom(__DIR__ . '/Asset/test-route.php');
    }
}