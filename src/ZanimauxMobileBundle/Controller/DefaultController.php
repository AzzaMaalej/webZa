<?php

namespace ZanimauxMobileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZanimauxMobileBundle:Default:index.html.twig');
    }
}
