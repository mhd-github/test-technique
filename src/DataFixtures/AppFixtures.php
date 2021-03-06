<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Article;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i < 10; $i++) { 
            $faker = Factory::create('fr_FR');
            $article = new Article();

            $article->setTitre($faker->words(3, true))
                    ->setDateDeCreation($faker->dateTime())
                    ->setTexte($faker->text(150))
                    ->setPhoto("350x150.png");
            $manager->persist($article);
        }
        $manager->flush();
    }
}
