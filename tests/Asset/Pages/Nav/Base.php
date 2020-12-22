<?php

namespace Akhaled\HybridComponents\Tests\Asset\Pages\Nav;

use Laravel\Dusk\Browser;
use Akhaled\HybridComponents\Tests\Page;

class Base extends Page
{
    public $url = '/nav/base';

    public function elements()
    {
        return [
            '@nav-base' => '.test-nav-base > nav.bg-white.text-black',
            '@nav-fixed' => '.test-nav-fixed > nav.bg-white.text-black.fixed.left-0.right-0',
            '@nav-fixed-top-0' => '.test-nav-fixed-top-0 > nav.bg-white.text-black.fixed.left-0.right-0.top-0',
            '@nav-fixed-bottom' => '.test-nav-fixed-bottom > nav.bg-white.text-black.fixed.bottom-0.left-0.right-0',
        ];
    }

    public function assert(Browser $browser)
    {
        $browser->assertPresent('@nav-base')->assertSee('Base nav');
        $browser->assertPresent('@nav-fixed');
        $browser->assertPresent('@nav-fixed-top-0');
        $browser->assertPresent('@nav-fixed-bottom');
    }
}