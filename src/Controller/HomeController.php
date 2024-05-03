<?php

namespace App\Controller;


use App\Entity\Card;
use App\Entity\Carousel;
use App\Entity\Solution;
use App\Entity\Bandeinfo;
use App\Entity\Partenaire;
use App\Entity\Bandesolution;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $Main = $this->em->getRepository(Card::class)->findAll();
        $Carousel = $this->em->getRepository(Carousel::class)->findAll();
        $Bandeinfo = $this->em->getRepository(Bandeinfo::class)->findAll();
        $Partenaire = $this->em->getRepository(Partenaire::class)->findAll();
        $Bandesolution = $this->em->getRepository(Bandesolution::class)->findAll();
        $Solution = $this->em->getRepository(Solution::class)->findAll();
        


        return $this->render('home/index.html.twig', [
            'Main' => $Main,
            'Carousel' => $Carousel,
            'Bandeinfo' => $Bandeinfo,
            'Partenaire' => $Partenaire,
            'Bandesolution' => $Bandesolution,
            'Solution' => $Solution,
            


        ]);
    }
    
    #[Route('/showSolution/article/{id}', name: 'app_show_solution')]
    public function showSolution($id): Response
    {
        $showSolutions = $this->em->getRepository(Card::class)->findOneBy(['id' => $id]);

        //dd($showArticles);
        return $this->render('home/showSolution.html.twig', [
            'showSolutions' => $showSolutions,

        ]);
    }
}
