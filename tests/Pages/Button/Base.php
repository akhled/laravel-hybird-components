<?php

namespace Akhaled\HybridComponents\Tests\Pages\Button;

use Laravel\Dusk\Page;
use Laravel\Dusk\Browser;

class Base extends Page
{
    public function url()
    {
        return '/button/base';
    }

    public function elements()
    {
        return [
            '@button' => 'button[type="button"].px-4.py-2.bg-gray-500.border.border-transparent.font-semibold.text-white.hover\:bg-gray-400.focus\:outline-none.focus\:border-gray-700.focus\:shadow-outline-gray.active\:bg-gray-500.transition.ease-in-out.duration-150'
        ];
    }

    public function assert(Browser $browser)
    {
        $browser->assertPresent('@button');
    }
}