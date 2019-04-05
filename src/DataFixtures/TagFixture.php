<?php

namespace App\DataFixtures;

use App\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TagFixture extends Fixture
{

    public function load(ObjectManager $manager)
    {

        for ($i = 0; $i < 20; $i++) {

            $tag = new Tag();

            $tag->setName('name'.$i);

            $tag->setSlug('slug-'.$i);

            $tag->setCreateAt(\DateTime::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s')));

            $manager->persist($tag);
        }

        $manager->flush();
    }
}
