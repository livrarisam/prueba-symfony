<?php

namespace Prueba\Bundle\ImagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PruebaImagesBundle:Default:index.html.twig');
    }
}
