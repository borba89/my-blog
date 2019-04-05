<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class CommentFixture
 * @package App\DataFixtures
 */
class CommentFixture extends Fixture

{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)

    {

        for ($i = 0; $i < 20; $i++) {

            $comment = new Comment();

            $comment->setAuthor('Author'.$i);

            $comment->setContent('Lorem ipsum'.$i);

            $comment->setCreateAt(\DateTime::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s')));

            $manager->persist($comment);

        }

        $manager->flush();

    }
}
