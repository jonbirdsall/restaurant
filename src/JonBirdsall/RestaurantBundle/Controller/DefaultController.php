<?php

namespace JonBirdsall\RestaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JonBirdsallRestaurantBundle:Default:index.html.twig');
    }
    
    public function menuAction()
    {
        return $this->render('JonBirdsallRestaurantBundle:Default:menu.html.twig');
    }
    
    public function locationAction()
    {
        return $this->render('JonBirdsallRestaurantBundle:Default:location.html.twig');
    }
    
    public function reviewsAction()
    {
        return $this->render('JonBirdsallRestaurantBundle:Default:reviews.html.twig');
    }
    
    public function contactAction()
    {
        return $this->render('JonBirdsallRestaurantBundle:Default:contact.html.twig');
    }
}
