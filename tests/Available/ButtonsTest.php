<?php

use Akhaled\HybridComponents\Tests\TestCase;

/**
 * ButtonsTest
 * Can use x-button and x-button-*
 * @group Available
 */
class ButtonsTest extends TestCase
{
    /** @test */
    public function button_danger_is_available()
    {
        $this->assertComponentExist('hybrid-components::components.button.danger');
        $this->assertComponentAliasExist('hybrid-button-danger');
    }

    /** @test */
    public function button_modal_show_is_available()
    {
        $this->assertComponentExist('hybrid-components::components.button.modal.show');
        $this->assertComponentAliasExist('hybrid-button-modal-show');
    }
}