<?php

namespace App\Controller\Admin;

use App\Entity\Marker;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MarkerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Marker::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
