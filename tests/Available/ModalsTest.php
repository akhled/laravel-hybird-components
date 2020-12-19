<?php

use Akhaled\HybridComponents\Tests\TestCase;

/**
 * ModalsTest
 * Can use livewire:hybrid-modal-*
 * @group Available
 */
class ModalsTest extends TestCase
{
    /** @test */
    public function modal_is_available()
    {
        $this->assertComponentExist('hybrid-components::components.modal');
        $this->assertComponentAliasExist('hybrid-modal');
    }
}