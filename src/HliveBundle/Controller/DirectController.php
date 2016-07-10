<?php

namespace HliveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DirectController extends Controller
{
    public function indexAction()
    {
        return $this->render('HliveBundle:Default:direct.html.twig');
    }
}
