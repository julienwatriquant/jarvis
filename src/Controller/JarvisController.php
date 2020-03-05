<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JarvisController extends AbstractController
{
    /**
     * @Route("/jarvis", name="jarvis")
     */
    public function index()
    {
        return $this->render('jarvis/index.html.twig', [
            'controller_name' => 'JarvisController',
        ]);
    }
}
