<?php

namespace Mortar\View;

use Brick\Application\View\ClassView;

class HelloView extends ClassView
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
