<?php

namespace App\DataFixtures;

use App\Entity\Video;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class VideoFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $video = new Video();
        $video->setTitle('Video 1');
        $video->setDescription('Description 1');
        $video->setSlug('video-1');
        $video->setUrl('#');
        $video->setAuthor('Author 1');
        $video->setImage('https://picsum.photos/400/300');
        $video->addCategory($this->getReference(CategoryFixtures::CATEGORY_1_REFERENCE));
        $video->setUser($this->getReference(UserFixtures::USER_ADMIN_REFERENCE));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('Video 2');
        $video->setDescription('Description 2');
        $video->setSlug('video-2');
        $video->setUrl('#');
        $video->setAuthor('Author 2');
        $video->setImage('https://picsum.photos/400/300');
        $video->addCategory($this->getReference(CategoryFixtures::CATEGORY_1_REFERENCE));
        $video->addCategory($this->getReference(CategoryFixtures::CATEGORY_2_REFERENCE));
        $video->setUser($this->getReference(UserFixtures::USER_ADMIN_REFERENCE));
        $manager->persist($video);

        $manager->flush();
    }
    
    public function getDependencies(): array
    {
        return [
            CategoryFixtures::class,
            UserFixtures::class,
        ];
    }
}
