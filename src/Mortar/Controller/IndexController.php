<?php

namespace Mortar\Controller;

use Brick\App\Controller\AbstractController;
use Brick\App\Controller\Annotation\QueryParam;

use Mortar\View\HelloView;
use Mortar\View\IndexView;

class IndexController extends AbstractController
{
    public function indexAction()
    {
        return $this->render(new IndexView());
    }

    /**
     * @QueryParam("name")
     */
    public function helloAction($name)
    {
        return $this->render(new HelloView($name));
    }
}
