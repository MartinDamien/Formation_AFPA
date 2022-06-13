<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Animal;
use App\Entity\Espece;
use App\Entity\Continent;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e1 = new Espece();
        $e1->setLibelle("mamifere")->setDescription("il donne du lait");
        $manager->persist($e1);

        $e2 = new Espece();
        $e2->setLibelle("oiseau")->setDescription("il vole");
        $manager->persist($e2);


        $c1 = new Continent();
        $c1->setLibelle("Afrique")->setDescription("la terre est la plus grande");
        $manager->persist($c1);

        $c2 = new Continent();
        $c2->setLibelle("Europe")->setDescription("la terre est la plus grande");
        $manager->persist($c2);

        $c3 = new Continent();
        $c3->setLibelle("Asie")->setDescription("la terre est la plus grande");
        $manager->persist($c3);

        $c4 = new Continent();
        $c4->setLibelle("Amerique")->setDescription("la terre est la plus grande");
        $manager->persist($c4);


        $a1 = new Animal();
        $a1->setNom('Cheval')->addContinent($c1)->addContinent($c2)->setEspece($e1)->setPoid(100)
        ->setImage("https://i.skyrock.net/0258/4810258/pics/139516809.jpg")
        ->setDescription("Mais, vous savez, moi je ne crois pas qu'il y ait de bonne ou de mauvaise situation. Moi, si je devais résumer ma vie aujourd'hui avec vous, je dirais que c'est d'abord des rencontres,.");
        
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom('Chien')->addContinent($c1)->addContinent($c3)->addContinent($c4)->setEspece($e1)->setPoid(40)
        ->setImage("https://newsroom.parcasterix.fr/wp-content/uploads/2021/08/914411.jpg")
        ->setDescription("Des gens qui m'ont tendu la main, peut-être à un moment où je ne pouvais pas, où j'étais seul chez moi. Et c'est assez curieux de se dire que les hasards, les rencontres forgent une destinée....");
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom('Chat')->addContinent($c1)->addContinent($c4)->setEspece($e1)->setPoid(5)
        ->setImage("https://i.ytimg.com/vi/gf0B5Z_xv8w/maxresdefault.jpg")
        ->setDescription("Parce que quand on a le goût de la chose, quand on a le goût de la chose bien faite, Le beau geste, parfois on ne trouve pas l'interlocuteur en face, je dirais, le miroir qui vous aide à avancer. Alors ce n'est pas mon cas, comme je le disais là,");
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom('dauphin')->addContinent($c1)->addContinent($c3)->addContinent($c4)->setEspece($e1)->setPoid(10)
        ->setImage("dauphin.png")
        ->setDescription("puisque moi au contraire, j'ai pu ; Et je dis merci à la vie, je lui dis merci, je chante la vie, je danse la vie... Je ne suis qu'amour! Et finalement, quand beaucoup de gens aujourd'hui me disent : Mais comment fais-tu pour avoir cette humanité ?");
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom('Lapin')->addContinent($c1)->addContinent($c2)->setEspece($e1)->setPoid(5)
        ->setImage("lapin.png")
        ->setDescription("Eh bien je leur réponds très simplement, je leur dis que c'est ce goût de l'amour, Ce goût donc qui m'a poussé aujourd'hui à entreprendre une construction mécanique,");
        $manager->persist($a5);

        $a6 = new Animal();
        $a6->setNom('Oiseau')->addContinent($c1)->addContinent($c3)->setEspece($e2)->setPoid(3)
        ->setImage("oiseau.png")
        ->setDescription("Mais demain, qui sait, peut-être simplement à me mettre au service de la communauté, à faire le don, le don de soi...");
        $manager->persist($a6);

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
