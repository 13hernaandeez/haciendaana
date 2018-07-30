<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/home.html", name="homepage")
     */
    public function homeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/home.html.twig');

    }
     /**
     * @Route("/sobre_nosotros.html", name="sobre_nosotros")
     */
     public function sobrenosotrosAction(Request $request)
     {
        // replace this example code with whatever you need
        return $this->render('default/sobre_nosotros.html.twig');

    }

     /**
         * @Route("/donde_estamos.html", name="donde_estamos")
         */
     public function dondeestamosAction(Request $request)
     {
            // replace this example code with whatever you need
        return $this->render('default/donde_estamos.html.twig');

    }

     /**
         * @Route("/contacto.html", name="contacto")
         */
     public function contactoAction(Request $request)
     {
            // replace this example code with whatever you need
        return $this->render('default/contacto.html.twig');

}


}

