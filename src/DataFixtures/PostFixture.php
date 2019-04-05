<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class PostFixture
 * @package App\DataFixtures
 */
class PostFixture extends Fixture

{

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)

    {

        for ($i = 0; $i < 20; $i++) {

            $post = new Post();

            $post->setTitle('post'.$i);

            $post->setContent('Lorem ipsum'.$i);

            $post->setAuthor('Author'.$i);

            $post->setStatus(1);

            //$post->setCategory('category'.mt_rand(1,5));

            //$post->setComments('Lorem comments'.$i);

            $post->setSlug('slug-'.$i);

            //$post->setTags('tag1', 'tag2');

            $post->setCreateAt(\DateTime::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s')));

            $manager->persist($post);

        }

        $manager->flush();

    }

}
