<?php

namespace App\DataFixtures;
use App\Entity\Filter;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FilterFixtures extends Fixture
{
    public const FILTER_1_REFERENCE = 'filter-1';
    public const FILTER_2_REFERENCE = 'filter-2';

    public function load(ObjectManager $manager): void
    {
        $filter = new Filter();
        $filter->setTitle('Association 1');
        $filter->setSlug('association-1');
        $manager->persist($filter);
        $this->addReference(self::FILTER_1_REFERENCE, $filter);

        $filter = new Filter();
        $filter->setTitle('Association 2');
        $filter->setSlug('association-2');
        $manager->persist($filter);
        $this->addReference(self::FILTER_2_REFERENCE, $filter);

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
