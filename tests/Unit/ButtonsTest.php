<?php

namespace Akhaled\HybridComponents\Tests\Unit;

use Akhaled\HybridComponents\Tests\TestCase;

/**
 * ButtonsTest
 * Can use x-button and x-button-*
 * @group Available
 */
class ButtonsTest extends TestCase
{
    /** @test */
    public function button_is_available()
    {
        $this->assertComponentExist('hybrid-components::components.button');
        $this->assertComponentAliasExist('hybrid-button');
    }

    /** @test */
    public function button_modal_show_is_available()
    {
        $this->assertComponentExist('hybrid-components::components.button.modal.show');
        $this->assertComponentAliasExist('hybrid-button-modal-show');
    }

    /** @test */
    public function button_modal_times_is_available()
    {
        $this->assertComponentExist('hybrid-components::components.button.modal.times');
        $this->assertComponentAliasExist('hybrid-button-modal-times');
    }
}