<?php

namespace Akhaled\HybridComponents\Tests\Asset\Pages\Nav;

use Laravel\Dusk\Browser;
use Akhaled\HybridComponents\Tests\Page;

class Dismissible extends Page
{
    public $url = '/nav/dismissible';

    public function elements()
    {
        return [
            '@nav-dismissible' => '.nav-dismissible',
        ];
    }

    public function assert(Browser $browser)
    {
        // $browser->assertPresent('@nav-dismissible');
    }
}