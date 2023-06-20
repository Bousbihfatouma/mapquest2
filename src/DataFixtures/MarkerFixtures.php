<?php

namespace App\DataFixtures;
use App\Entity\Marker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class MarkerFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {   
        $marker = new Marker();
        $marker->setTitle('Marker 1');
        $marker->setImage('https://picsum.photos/400/300');
        $marker->setEmail('dev@gmail.fr');
        $marker->setTel('0606060606');
        $marker->setStreet('Rue de la Paix');
        $marker->setZip('75000');
        $marker->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.');
        $marker->setSlug('marker-1');
        $marker->setLatitude(48.8566);
        $marker->setLongitude(2.3522);
        $marker->addFilter($this->getReference(FilterFixtures::FILTER_1_REFERENCE));
        $marker->setUser($this->getReference(UserFixtures::USER_ADMIN_REFERENCE));
        $manager->persist($marker);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            FilterFixtures::class,
            UserFixtures::class,
        ];
    }
}
