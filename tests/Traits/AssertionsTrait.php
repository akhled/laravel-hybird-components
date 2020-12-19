<?php

namespace Akhaled\HybridComponents\Tests\Traits;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;

/**
 * Assertions trait
 */
trait AssertionsTrait
{
    public function assertComponentExist(string $component_path)
    {
        $this->assertTrue(View::exists($component_path));
    }

    public function assertComponentAliasExist(string $alias)
    {
        $this->assertArrayHasKey($alias, Blade::getClassComponentAliases());
    }
}