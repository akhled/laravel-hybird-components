<?php

use Livewire\Livewire;
use Akhaled\HybridComponents\Tests\TestCase;
use Akhaled\HybridComponents\Livewire\Modal;

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
        Livewire::test('hybrid-modal')->assertStatus(200);
        Livewire::test(Modal::class)->assertStatus(200);
    }
}
