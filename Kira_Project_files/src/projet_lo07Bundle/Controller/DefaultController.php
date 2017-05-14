<?php

namespace projet_lo07Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('projet_lo07Bundle:Default:index.html.twig');
    }
}
