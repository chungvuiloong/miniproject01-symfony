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

    #[Route('/todos', name: 'app_todos')]
    public function toDo(): Response
    {
        return $this->render('todos/index.html.twig', [

        ]);
    }

    #[Route('/team', name: 'team')]
    public function team(): Response
    {
        return $this->render('pages/team.html.twig', [
        ]);
    }

    #[Route('/kevin', name: 'kevin')]
    public function kevin(): Response
    {
        return $this->render('pages/kevin.html.twig', [
        ]);
    }

    #[Route('/mrjay', name: 'mrjay')]
    public function mrjay(): Response
    {
        return $this->render('pages/mrjay.html.twig', [
        ]);
    }

    #[Route('/eric', name: 'eric')]
    public function eric(): Response
    {
        return $this->render('pages/eric.html.twig', [
        ]);
    }

    #[Route('/nayyer', name: 'nayyer')]
    public function nayyer(): Response
    {
        return $this->render('pages/nayyer.html.twig', [
        ]);
    }

    #[Route('/pricing', name: 'pricing')]
    public function pricing(): Response
    {
        return $this->render('pages/pricing.html.twig', [
        ]);
    }



}
