<?php

namespace Akhaled\HybridComponents\Tests\Browser;

use Akhaled\HybridComponents\Tests\TestCase;

class ModalsDuskTest extends TestCase
{
    /** @test */
    public function modal_is_available()
    {
        $this->browse(function ($browser) {
            $browser
                ->visit('/modal')
                // ->screenshot('modal')
                ->assertPresent('.modal');
        });
    }
}