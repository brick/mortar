<?php

namespace Mortar\View;

use Brick\View\AbstractView;

class HelloView extends AbstractView
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
