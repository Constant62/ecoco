<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EController extends AbstractController
{
    /**
     * @Route("/e", name="e")
     */
    public function index()
    {
        return $this->render('e/index.html.twig', [
            'controller_name' => 'EController',
        ]);
    }
    /**
     *  @Route ("/", name="home")
     */
    public function home() {
        return $this->render('e/home.html.twig');
    }

}
