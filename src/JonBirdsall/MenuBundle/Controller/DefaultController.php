<?php

namespace JonBirdsall\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JonBirdsallMenuBundle:Default:index.html.twig');
    }
}
