<?php

namespace Akhaled\HybridComponents\Tests\Browser;

use Akhaled\HybridComponents\Tests\TestCase;
use Akhaled\HybridComponents\Tests\Asset\Pages\Nav\Dismissible;
use Akhaled\HybridComponents\Tests\Asset\Pages\Nav\Base;

class NavDuskTest extends TestCase
{
    /** @test */
    public function check_base_nav()
    {
        $this->browse(fn ($browser) => $browser->visit(new Base));
    }

    /** @!test */
    public function check_nav_dismissible_classes()
    {
        $this->browse(fn ($browser) => $browser->visit(new Dismissible));
    }
}