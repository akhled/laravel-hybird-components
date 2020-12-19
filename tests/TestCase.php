<?php

use Orchestra\Testbench\TestCase as TestbenchTestCase;

abstract class TestCase extends TestbenchTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }
}
