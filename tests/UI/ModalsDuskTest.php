<?php

use Akhaled\HybridComponents\Tests\DuskTestCase;

class ModalsDuskTest extends DuskTestCase
{
    /** @test */
    public function modal_is_available()
    {
        $this->get('/modal')->assertStatus(200);
    }
}