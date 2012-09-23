<?php

namespace Gicsdr\ArmatucanastaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GicsdrArmatucanastaBundle:Default:index.html.twig', array());
    }
}
