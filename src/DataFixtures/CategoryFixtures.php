<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    const CATEGORIES = [
        'Horreur',
        'Science-Fiction',
        'Comic',
        'Drame',
        'Documentaire',
        'Pour Enfants',
        'Action',
        'Aventure',
        'Amour',
        'Animation',];

    public function load(ObjectManager $manager)
    {
     foreach (self::CATEGORIES as $key => $categoryName) {
         $category = new Category();
         $category->setName($categoryName);

         $manager->persist($category);
     }
     $manager->flush();
    }
}
