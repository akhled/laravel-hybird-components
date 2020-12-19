<?php

namespace Akhaled\HybridComponents\Traits;

use Livewire\Livewire;
use Akhaled\HybridComponents\Livewire\Modal;

/**
 * RegisterLivewireComponentsTrait
 */
trait RegisterLivewireComponentsTrait
{
    public function bootLivewireComponentsUp()
    {
        Livewire::component('hybrid-modal', Modal::class);
    }
}
