<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public const CATEGORY_1_REFERENCE = 'cat-1';
    public const CATEGORY_2_REFERENCE = 'cat-2';
    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setTitle('Cat 1');
        $category->setSlug('cat-1');
        $manager->persist($category);
        $this->addReference(self::CATEGORY_1_REFERENCE, $category);

        $category = new Category();
        $category->setTitle('Cat 2');
        $category->setSlug('cat-2');
        $manager->persist($category);
        $this->addReference(self::CATEGORY_2_REFERENCE, $category);

        $manager->flush();
    }
}
