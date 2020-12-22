<?php

namespace Akhaled\HybridComponents\Tests\Pages\Modal;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;

class DefaultModal extends Page
{
    public function url()
    {
        return '/modal/default';
    }

    public function elements()
    {
        return [
            '@modal-show-button' => 'button.px-4.py-2.border.border-transparent.font-semibold.hover:bg-green-200.focus:outline-none.focus:border-green-500.focus:shadow-outline-green.active:bg-green-300.transition.ease-in-out.duration-150',
            '@modal-body' => '.bg-white.rounded-lg.overflow-hidden.shadow-xl.transform.transition-all.sm:w-full.sm:max-w-3xl'
        ];
    }

    public function assert(Browser $browser)
    {
        // $browser->assertPresent('@modal-show-button');
    }
}