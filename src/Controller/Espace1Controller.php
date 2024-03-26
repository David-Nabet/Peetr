<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Espace1Controller extends AbstractController
{
    #[Route('/espace1', name: 'app_espace1')]
    public function index(): Response
    {
        return $this->render('espace1/index.html.twig', [
            'controller_name' => 'Espace1Controller',
        ]);
    }
}
