<?php

namespace Akhaled\HybridComponents\Tests\Browser;

use Akhaled\HybridComponents\Tests\Pages\Button\Base;
use Akhaled\HybridComponents\Tests\TestCase;

class ButtonsDuskTest extends TestCase
{
    /** @test */
    public function test_button_base()
    {
        $this->browse(function ($browser) {
            $browser->visit(new Base);
        });
    }
}