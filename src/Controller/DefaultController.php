<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route({
     *     "en": "/default",
     *     "fr": "/defaut",
     *     "es": "/defecto"
     *   }, name="default"
     * )
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route({
     *     "en": "/",
     *     "fr": "/accueil",
     *     "es": "/bienvenida"
     *   }, name="home"
     * )
     */
    public function home()
    {
        return $this->render('default/home.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
