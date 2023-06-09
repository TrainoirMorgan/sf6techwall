<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/first', name: 'app_first')]
    public function index(): Response
    {
        return $this->render('first/index.html.twig', [
            'name' => 'Trainoir',
            'firstname' => 'Morgan'
        ]);
    }

    #[Route('/sayHello/{name}', name: 'app_sayHello')]
    public function sayHello($name): Response
    {
       return $this->render('first/hello.html.twig', ['nom' => $name]);
    }
}
