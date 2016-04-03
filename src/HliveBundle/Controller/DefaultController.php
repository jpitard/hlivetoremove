<?php

namespace HliveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($nom,$prenom)
    {
        return $this->render('HliveBundle:Default:index.html.twig', array('nom'=>$nom,
                                                                            'prenom'=>$prenom));
    }
}
