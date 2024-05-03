<?php

namespace App\Controller;

use App\Entity\Service;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SolutionController extends AbstractController
{
    
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/solution', name: 'app_solution')]
    public function index(): Response
    {
        $service = $this->em->getRepository(Service::class)->findAll();
        return $this->render('solution/index.html.twig', [
           
            'service' => $service,
        ]);
    }
}
