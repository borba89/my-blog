<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;


/**
 * Class UserFixture
 * @package App\DataFixtures
 */
class UserFixture extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    /**
     * UserFixture constructor.
     * @param UserPasswordEncoderInterface $encoder
     */
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {

        for ($i = 0; $i < 20; $i++) {

            $user = new User();

            $user->setEmail('boris'.$i.'@mail.com');

            $password = $this->encoder->encodePassword($user, 'pass_1234');
            $user->setPassword($password);

            $user->setRoles(['ROLE_USER']);

            $user->setFirstName('Boris'.$i);

            $manager->persist($user);
        }

        $manager->flush();
    }
}
