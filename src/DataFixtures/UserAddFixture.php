<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserAddFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        
        $user->setEmail('admin@test.mac');
        $manager->persist($user);

        $manager->flush();
    }
}
