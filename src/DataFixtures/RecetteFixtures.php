<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Recette;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class RecetteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();

        $entree = (new Categorie())->setName('Entrée');
        $plat = (new Categorie())->setName('Plat');
        $dessert = (new Categorie())->setName('Dessert');
        $categories = [ $entree, $plat, $dessert ];

        $manager->persist($entree);
        $manager->persist($plat);
        $manager->persist($dessert);

        $manager->flush();

        for ($i=0; $i <= 50 ; $i++) { 
            $recette = new Recette();
            $recette
                ->setTitle($faker->name())
                ->setResumer($faker->sentence(20))
                ->setPreparation($faker->text(500))
                ->setPeoples($faker->randomDigit())
                ->setTime($faker->randomDigit() .  " min")
                ->setIngredients($faker->text(300))
                ->setCategorie($faker->randomElement($categories));

            $manager->persist($recette);
        }

        $manager->flush();
    }
}