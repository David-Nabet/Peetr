<?php

namespace App\Controller\Admin;

use App\Entity\Card;
use App\Entity\User;
use App\Entity\Carousel;
use App\Entity\Bandeinfo;
use App\Entity\Partenaire;
use App\Entity\Bandesolution;
use App\Controller\Admin\CardCrudController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Admin\CarouselCrudController;
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
        yield MenuItem::linkToCrud('Le Carousel', 'fas fa-images', Carousel::class);
        yield MenuItem::linkToCrud('Cards', 'fa-solid fa-layer-group', Card::class);
        yield MenuItem::linkToCrud('Bandesolutions', 'fa-regular fa-lightbulb', Bandesolution::class);
        yield MenuItem::linkToCrud('Bandeinfo', 'fa-solid fa-info', Bandeinfo::class);
        yield MenuItem::linkToCrud('Partenaire', 'fa-solid fa-users', Partenaire::class);
    }
}
