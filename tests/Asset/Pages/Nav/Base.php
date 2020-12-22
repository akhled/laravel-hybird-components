<?php

namespace Akhaled\HybridComponents\Tests\Asset\Pages\Nav;

use Laravel\Dusk\Browser;
use Akhaled\HybridComponents\Tests\Page;

class Base extends Page
{
    public $url = '/nav/base';

    public function elements()
    {
        $base_selector = 'nav.w-full';
        $fixed_base_selector = $base_selector . ".bg-white.text-black.fixed";

        return [
            '@nav-base' => ".test-nav-base > ${base_selector}.bg-white.text-black",
            '@nav-colors' => ".test-nav-colors > ${base_selector}.text-white.bg-gray-900",
            '@nav-fixed' => ".test-nav-fixed > ${fixed_base_selector}.left-0.right-0",
            '@nav-fixed-top-0' => ".test-nav-fixed-top-0 > ${fixed_base_selector}.left-0.right-0.top-0",
            '@nav-fixed-bottom' => ".test-nav-fixed-bottom > ${fixed_base_selector}.bottom-0.left-0.right-0",
        ];
    }

    public function assert(Browser $browser)
    {
        $browser->assertPresent('@nav-base')->assertSee('Base nav');
        $browser->assertPresent('@nav-colors');
        $browser->assertPresent('@nav-fixed');
        $browser->assertPresent('@nav-fixed-top-0');
        $browser->assertPresent('@nav-fixed-bottom');
    }
}