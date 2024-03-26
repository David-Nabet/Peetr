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
            ImageField::new('image', 'Image')
            ->setBasePath('upload/')
            ->setUploadDir('public/upload')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextField::new('title', 'Titre'),
            TextField::new('subtitle', 'Sous-titre'), 
            TextField::new('button', 'Texte du bouton'), 
            
        ];

    }
}