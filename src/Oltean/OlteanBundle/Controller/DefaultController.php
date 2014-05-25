<?php

namespace Oltean\OlteanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($parametru = 'Home')
    {
        return $this->render('OlteanOlteanBundle:Default:index.html.twig', array('parametru' => $parametru));
    }
}
