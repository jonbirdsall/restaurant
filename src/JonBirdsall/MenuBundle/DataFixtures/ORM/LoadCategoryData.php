<?php
// src/JonBidsall/MenuBundle/DataFixtures/ORM/LoadCategoryData.php

namespace JonBirdsall\MenuBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JonBirdsall\MenuBundle\Entity\Category;

class LoadCategoryData implements \Doctrine\Common\DataFixtures\FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        
        $categories[1] = new Category('Appetizers');
        $categories[2] = new Category('Beef');
        $categories[3] = new Category('Chicken');
        $categories[4] = new Category('Pork');
        $categories[5] = new Category('Vegetable');
        $categories[6] = new Category('Seafood');
        $categories[7] = new Category('Drinks');
        
        foreach($categories as $category)
        {
            $manager->persist($category);
        }
        
        $manager->flush();
    }
}
