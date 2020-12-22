<?php

namespace Akhaled\HybridComponents\Tests;

use Laravel\Dusk\Page as DuskPage;

class Page extends DuskPage
{
    public $url = '/';

    public function url()
    {
        return $this->url;
    }
}
