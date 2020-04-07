<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JarvisController extends AbstractController
{
    /**
     * @Route("/", name="jarvis")
     */
    public function index()
    {
        return $this->render('jarvis/index.html.twig');
    }

    /**
     * @Route("/jarvis/pro", name="jarvisPro")
     */
    public function jarvisPro()
    {
        return $this->render('jarvis/pro.html.twig');
    }

    /**
     * @Route("/jarvis/acces", name="jarvisAcces")
     */
    public function jarvisAcces()
    {
        return $this->render('jarvis/acces.html.twig');
    }

    /**
     * @Route("/jarvis/family", name="jarvisFamily")
     */
    public function jarvisFamily()
    {    
        return $this->render('jarvis/family.html.twig');
    }
    
    /**
     * @Route("/jarvis/hotel", name="jarvisHotel")
     */
    public function jarvisHotel()
    {    
        return $this->render('jarvis/hotel.html.twig');
    }
    
    /**
     * @Route("/jarvis/screen", name="jarvisScreen")
     */
    public function jarvisScreen()
    {    
        return $this->render('jarvis/screen.html.twig');
    }
    
}

