<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class CategoryFixture
 * @package App\DataFixtures
 */
class CategoryFixture extends Fixture
{

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)

    {

        for ($i = 0; $i < 20; $i++) {

            $category = new Category();

            $category->setNameCategory('category'.mt_rand(1,5));

            $category->setSlug('slug-'.$i);

            $manager->persist($category);
        }

        $manager->flush();

    }
}
