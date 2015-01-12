<?php

namespace Acme\Bundle\HotelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeHotelBundle:Default:index.html.twig', array('name' => $name));
    }
}
