<?php

namespace App\Controller;

use App\GreetingGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Bridge\Monolog\Logger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController {
    /**
     * @Route("/produit/{name}")
     */
    public function index($name) {
        //return new Response('Hello '.$name);
        /*return $this->render("default/index.html.twig", [
            'name' => $name
        ]);*/
        
        return $this->render("default/index.html.twig", [
            'name' => 'Adil',
            'symfony' => '5.0'
        ]);
    }
}
