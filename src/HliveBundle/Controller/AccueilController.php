<?php

namespace HliveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction()
    {
        return $this->render('HliveBundle:Default:index.html.twig');
    }
}
