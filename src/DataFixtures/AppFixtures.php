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

            $article->setTitre($faker->sentence(3))
                    ->setDateDeCreation($faker->dateTime())
                    ->setTexte($faker->text())
                    ->setPhoto($faker->imageUrl(200, 250,'animals', true));
            $manager->persist($article);
        }
        $manager->flush();
    }
}
