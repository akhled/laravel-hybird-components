<?php

namespace Akhaled\HybridComponents\Tests;

use Orchestra\Testbench\TestCase as TestbenchTestCase;
use Akhaled\HybridComponents\Tests\Traits\AssertionsTrait;
use Akhaled\HybridComponents\HybridComponentsServiceProvider;

abstract class TestCase extends TestbenchTestCase
{
    use AssertionsTrait;

    protected function getPackageProviders($app)
    {
        return [HybridComponentsServiceProvider::class];
    }

    public function setUp(): void
    {
        parent::setUp();
    }
}
