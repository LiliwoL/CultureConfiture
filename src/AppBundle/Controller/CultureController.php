<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CultureController extends Controller
{
    /**
     * @Route("/culture", name="culture")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('culture/index.html.twig');
    }
}