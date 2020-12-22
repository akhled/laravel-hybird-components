<?php

namespace Akhaled\HybridComponents\Tests\Asset\Pages\Nav;

use Laravel\Dusk\Browser;
use Akhaled\HybridComponents\Tests\Page;

class Dismissible extends Page
{
    public $url = '/nav/dismissible';

    public function elements()
    {
        $base_selector = 'nav.w-full[x-show=\!dismiss][x-data=\'\{"dismiss"\:false\}\']';

        return [
            '@nav-base' => ".test-dismissible-base > ${base_selector}.bg-white.text-black.flex.align-center.justify-between",
            '@nav-times' => "button[x-on\:click='dismiss=true'] > svg.fill-current.text-black"
        ];
    }

    public function assert(Browser $browser)
    {
        $browser
            ->assertPresent('@nav-base')
            ->assertPresent("@nav-base > @nav-times")
            ->assertSee('Hello');
    }
}