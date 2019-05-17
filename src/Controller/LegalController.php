<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LegalController extends AbstractController
{
    /**
     * @Route("/legal", name="legal")
     */
    public function index()
    {
        return $this->render('legal/index.html.twig', [
            'controller_name' => 'LegalController',
        ]);
    }

    /**
     * @Route({
     *     "en": "/cookie-policy",
     *     "fr": "/politique-cookie"
     *   },
     *   name="cookie-policy"
     * )
     */
    public function cookiePolicy()
    {
        return $this->render('legal/cookie-policy.html.twig', [
            'controller_name' => 'LegalController',
        ]);
    }

    /**
     * @Route({
     *     "en": "/terms",
     *     "fr": "/modalites"
     *   },
     *   name="terms"
     * )
     */
    public function terms()
    {
        return $this->render('legal/terms.html.twig', [
            'controller_name' => 'LegalController',
        ]);
    }

    /**
     * @Route({
     *     "en": "/privacy",
     *     "fr": "/confidentialite"
     *   },
     *   name="privacy"
     * )
     */
    public function privacy()
    {
        return $this->render('legal/privacy.html.twig', [
            'controller_name' => 'LegalController',
        ]);
    }
}
