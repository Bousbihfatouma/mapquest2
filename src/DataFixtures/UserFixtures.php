<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public const USER_ADMIN_REFERENCE = 'user-admin';

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('admin@localhost.dev');
        $user->setPassword($this->encoder->hashPassword($user, 'admin'));
        $user->setName('Admin');
        $user->setRoles(['ROLE_USER', 'ROLE_ADMIN']);
        $user->setSlug('admin');

        $manager->persist($user);
        $this->addReference(self::USER_ADMIN_REFERENCE, $user);
        $manager->flush();
    }
}
