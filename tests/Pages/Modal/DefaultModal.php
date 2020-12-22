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
            '@modal-show-button' => 'button[type=button][x-on\:click="showModal = true"][wire\:loading\.attr=disabled]',
            '@modal-body' => '.bg-white.rounded-lg.overflow-hidden.shadow-xl.transform.transition-all.sm\:w-full.sm\:max-w-3xl'
        ];
    }

    public function assert(Browser $browser)
    {
        $browser->assertPresent('@modal-show-button')->assertPresent('@modal-body');
    }
}