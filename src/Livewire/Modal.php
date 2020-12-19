<?php

namespace Akhaled\HybridComponents\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $testModal = false;
    public $modalId;

    public function render()
    {
        return view('hybrid-components::livewire.modals.main');
    }
}
