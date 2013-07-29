<?php

namespace Mortar\Controller;

use Brick\Http\Request;
use Brick\Http\Response;

class IndexController
{
    public function indexAction()
    {
        return new Response('Hello world');
    }

    public function helloAction(Request $request)
    {
        return new Response('Hello ' . $request->getQuery('name'));
    }
}
