<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
    	return $this->render('home/home.html.twig');
    }

    /**
     * @Route("/Accueil", name="Accueil")
     */
    public function accueil()
    {
    	return $this->render('home/home.html.twig');
    }
    
     /**
     * @Route("/A-Propos", name="A-Propos")
     */
    public function presentation()
    {
    	return $this->render('home/presentation.html.twig');
    }

    /**
     * @Route("/WESTAF-TECH/Nos-Services", name="Service")
     */
    public function service()
    {
        return $this->render('home/service.html.twig');
    }

     /**
     * @Route("/WESTAF-TECH/Nouvelle-Media", name="Media")
     */
    public function Media()
    {
        return $this->render('home/media.html.twig');
    }

    /**
     * @Route("/WESTAF-TECH/Contact", name="Contact")
     */
    public function contact()
    {
    	return $this->render('home/contact.html.twig');
    }

     
}
