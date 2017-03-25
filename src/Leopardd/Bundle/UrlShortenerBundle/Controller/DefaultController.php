<?php

namespace Leopardd\Bundle\UrlShortenerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LeoparddUrlShortenerBundle:Default:index.html.twig');
    }
}
