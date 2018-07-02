<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortfolioController extends Controller
{
    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function index()
    {
        return $this->render('portfolio/index.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('portfolio/home.html.twig');
        }

    /**
     * @Route("/about", name="about")
     */
    public function about(){
        return $this->render('portfolio/about.html.twig');
        }

    /**
     * @Route("/projects", name="projects")
     */
    public function projects(){
        return $this->render('portfolio/projects.html.twig');
        }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(){
        return $this->render('portfolio/contact.html.twig');
        }

}
