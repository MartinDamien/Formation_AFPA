<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Animal;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $a1 = new Animal();
        $a1->setNom('Cheval')->setDescription('lorem ipsum...')->setPoids(100);
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom('Chien')->setDescription('lorem ipsum...')->setPoids(40);
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom('Chat')->setDescription('lorem ipsum...')->setPoids(5);
        $manager->persist($a3);

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
