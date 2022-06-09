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
        $a1->setNom('Cheval')->setImage("https://i.skyrock.net/0258/4810258/pics/139516809.jpg")->setDescription("Mais, vous savez, moi je ne crois pas qu'il y ait de bonne ou de mauvaise situation. Moi, si je devais résumer ma vie aujourd'hui avec vous, je dirais que c'est d'abord des rencontres,.")->setPoids(100);
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom('Chien')->setImage("https://newsroom.parcasterix.fr/wp-content/uploads/2021/08/914411.jpg")->setDescription("Des gens qui m'ont tendu la main, peut-être à un moment où je ne pouvais pas, où j'étais seul chez moi. Et c'est assez curieux de se dire que les hasards, les rencontres forgent une destinée....")->setPoids(40);
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom('Chat')->setImage("https://i.ytimg.com/vi/gf0B5Z_xv8w/maxresdefault.jpg")->setDescription("Parce que quand on a le goût de la chose, quand on a le goût de la chose bien faite, Le beau geste, parfois on ne trouve pas l'interlocuteur en face, je dirais, le miroir qui vous aide à avancer. Alors ce n'est pas mon cas, comme je le disais là,")->setPoids(5);
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom('dauphin')->setImage("dauphin.png")->setDescription("puisque moi au contraire, j'ai pu ; Et je dis merci à la vie, je lui dis merci, je chante la vie, je danse la vie... Je ne suis qu'amour! Et finalement, quand beaucoup de gens aujourd'hui me disent : Mais comment fais-tu pour avoir cette humanité ?")->setPoids(10);
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom('Lapin')->setImage("lapin.png")->setDescription("Eh bien je leur réponds très simplement, je leur dis que c'est ce goût de l'amour, Ce goût donc qui m'a poussé aujourd'hui à entreprendre une construction mécanique,")->setPoids(5);
        $manager->persist($a5);

        $a6 = new Animal();
        $a6->setNom('Oiseau')->setImage("oiseau.png")->setDescription("Mais demain, qui sait, peut-être simplement à me mettre au service de la communauté, à faire le don, le don de soi...")->setPoids(3);
        $manager->persist($a6);

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
