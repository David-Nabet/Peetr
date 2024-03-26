<?php

namespace App\Controller\Admin;

use App\Entity\Card;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CardCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Card::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('icon', 'Icone date de publication'),
            TextField::new('title'),
            TextField::new('subtitle'),
            ImageField::new('image', 'Image')
            ->setBasePath('upload/')
            ->setUploadDir('public/upload')
            ->setUploadedFileNamePattern('[randomhash].[extension]'),
        ];
    }
   
}
