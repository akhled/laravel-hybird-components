<?php

namespace Akhaled\HybridComponents\Tests\Pages\Button;

use Laravel\Dusk\Page;
use Laravel\Dusk\Browser;

class Base extends Page
{
    public function url()
    {
        return '/button';
    }

    public function elements()
    {
        return [
            '@button-base' => '.test-button-base > button[type="button"].px-4.py-2.bg-gray-500.border.border-transparent.font-semibold.text-white.hover\:bg-gray-400.focus\:outline-none.focus\:border-gray-700.focus\:shadow-outline-gray.active\:bg-gray-500.transition.ease-in-out.duration-150',
            '@button-modal-show' => '.test-button-modal-show > button[type=button][x-on\:click="showModal = true"][wire\:loading\.attr=disabled].px-4.py-2.bg-gray-500.border.border-transparent.font-semibold.text-white.hover\:bg-gray-400.focus\:outline-none.focus\:border-gray-700.focus\:shadow-outline-gray.active\:bg-gray-500.transition.ease-in-out.duration-150',
        ];
    }

    public function assert(Browser $browser)
    {
        $browser->assertPresent('@button-base')->assertSee('Base button');
        $browser->assertPresent('@button-modal-show')->assertSee('Show modal');
    }
}