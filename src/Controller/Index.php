<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Index extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [

        ]);
    }

    #[Route('/aboutUs', name: 'aboutUs')]
    public function aboutUs(): Response
    {
        return $this->render('pages/aboutUs.html.twig', [

        ]);
    }

    #[Route('/contactUs', name: 'contactUs')]
    public function contactUs(): Response
    {
        return $this->render('pages/contactUs.html.twig', [

        ]);
    }

    #[Route('/team', name: 'team')]
    public function team(): Response
    {
        return $this->render('pages/team.html.twig', [

        ]);
    }

}
