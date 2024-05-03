<?php

namespace App\Controller\Admin;

use App\Entity\Carousel;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CarouselCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Carousel::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('image', 'Image') /*Image est le label*/
            ->setBasePath('upload/') /*On definit le fichier de téléchargement*/
            ->setUploadDir('public/upload') /*On definit le chemin de téléchargement*/
            ->setUploadedFileNamePattern('[randomhash].[extension]'), /*Quand on charge l'image elle s'affiche de maniere aleatoir*/
            TextField::new('title', 'Titre'),
            TextField::new('subtitle', 'Sous-titre'), 
                      
        ];

    }
}