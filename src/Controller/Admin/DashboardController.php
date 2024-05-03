<?php

namespace App\Controller\Admin;

use App\Entity\Card;
use App\Entity\User;
use App\Entity\Carousel;
use App\Entity\Solution;
use App\Entity\Bandeinfo;
use App\Entity\Partenaire;
use App\Entity\Prestataire;
use App\Entity\Intervention;
use App\Entity\Bandesolution;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Admin\CarouselCrudController;
use App\Entity\Service;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        //return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
         return $this->redirect($adminUrlGenerator->setController(CarouselCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Peetr');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToRoute('Retour vers Peetr', 'fa fa-home', "app_home");
        yield MenuItem::linkToCrud('User', 'fa-solid fa-user', User::class);
        yield MenuItem::section('Gestion du site et accueil ');
        yield MenuItem::linkToCrud('Le Carousel', 'fas fa-images', Carousel::class);
        yield MenuItem::linkToCrud('Cards', 'fa-solid fa-layer-group', Card::class);
        yield MenuItem::linkToCrud('Bandesolutions', 'fa-regular fa-lightbulb', Bandesolution::class);
        yield MenuItem::linkToCrud('Intervention', 'fa-regular fa-lightbulb', Intervention::class);
        yield MenuItem::linkToCrud('Bandeinfo', 'fa-solid fa-info', Bandeinfo::class);
        yield MenuItem::linkToCrud('Partenaire', 'fa-solid fa-users', Partenaire::class);
        yield MenuItem::linkToCrud('Solution', 'fa-solid fa-users', Solution::class);
        yield MenuItem::section('Gestion des Services');
        yield MenuItem::linkToCrud('Service', 'fas fa-gift', Service::class);
        



    


       


    }
}
