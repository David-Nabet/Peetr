<?php
namespace App\Twig;

use App\Entity\Navbar;
use Twig\TwigFunction;
use App\Entity\NavIcon;
use Twig\Extension\AbstractExtension;
use Doctrine\ORM\EntityManagerInterface;


class AppExtension extends AbstractExtension
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface $em) // Injection de dépendance
    {
        $this->em = $em;
       
    } 
    
    public function getFunctions(): array
    {
        return [
            new TwigFunction('getNav', [$this, 'getNav']),
            new TwigFunction('getNav2', [$this, 'getNav2']),
            
        ];
    }
    public function getNav(){
        return $this->em->getRepository(Navbar::class)->findAll(); 
    }
    public function getNav2(){
        return $this->em->getRepository(NavIcon::class)->findAll(); 
    }
}