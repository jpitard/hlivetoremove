<?php

namespace HliveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('HliveBundle:Default:contact.html.twig');
    }
}
