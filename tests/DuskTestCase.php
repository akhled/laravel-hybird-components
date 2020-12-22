<?php

namespace Akhaled\HybridComponents\Tests;

use Orchestra\Testbench\Dusk\TestCase;
use Livewire\LivewireServiceProvider;
use Akhaled\HybridComponents\Tests\Traits\AssertionsTrait;
use Akhaled\HybridComponents\HybridComponentsServiceProvider;

abstract class DuskTestCase extends TestCase
{
    use AssertionsTrait;

    protected function getPackageProviders($app)
    {
        return [
            RouteServiceProvider::class,
            HybridComponentsServiceProvider::class,
            LivewireServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('app.key', 'base64:q2glUU25ZA0Y1y/Bbgtbc5xtqZfuZsIuDQ6y4cKM1zk=');
    }

    public function setUp(): void
    {
        parent::setUp();
    }
}