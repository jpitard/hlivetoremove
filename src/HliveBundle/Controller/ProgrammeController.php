<?php

namespace HliveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProgrammeController extends Controller
{
    public function indexAction()
    {
        return $this->render('HliveBundle:Default:programme.html.twig');
    }
}
