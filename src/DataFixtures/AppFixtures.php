<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private UserPasswordEncoderInterface $_encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->_encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        for ($u=0 ; $u<10; $u++){
            $user = new User();

            $passHash = $this->_encoder->encodePassword($user, 'alprod');

            $user->setEmail($faker->email)
                ->setPassword($passHash)
                ->setPseudo($faker->userName)
                ->setFirstname($faker->firstName)
                ->setLastname($faker->lastName)
                ->setStatus($faker->boolean)
                ->setAge($faker->biasedNumberBetween(18,60));



            $manager->persist($user);

            for ($a=0; $a < random_int(5,15); $a++){
                $article = (new Article())->setAuthor($user)
                                          ->setContent($faker->text(300))
                                          ->setName($faker->text(50));
                $manager->persist($article);

            }

        }
        $manager->flush();
    }
}
