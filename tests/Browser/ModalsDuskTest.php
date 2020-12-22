<?php

namespace Akhaled\HybridComponents\Tests\Browser;

use Akhaled\HybridComponents\Tests\TestCase;
use Akhaled\HybridComponents\Tests\Pages\Modal\DefaultModal;

class ModalsDuskTest extends TestCase
{
    /** @test */
    public function test_modal_with_default()
    {
        $this->browse(function ($browser) {
            $browser->visit(new DefaultModal);
        });
    }
}