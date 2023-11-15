<?php

namespace App\DataFixtures;

use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // User
        $u1 = new User();
        $u1->setEmail("bkergutul.contact@gmail.com")
            ->setPassword('$2y$13$VMfP7IdqEoI0XuAm9tCWzeiYLRG7.OTPLe.VMIYR7j8NyZitSLdYa')
            ->setName("KERGUTUL Brian")
            ->setBirthdate(new \DateTime("1990-01-01"))
            ->setGender("Male")
            ->setNationality("French")
            ->setPhoto("brian.jpg")
            ->setPhone("+1234567890")
            ->setStreetNumber("123")
            ->setStreetType("Avenue")
            ->setStreetName("Example Street")
            ->setPostcode("12345")
            ->setCity("Example City")
            ->setCountry("FR")
            ->setSocials([
                "Twitch" => "https://www.twitch.tv/hail_yldra",
                "Twitter/X" => "https://twitter.com/Yldrael",
                "YouTube" => "https://www.youtube.com/@hail_yldra",
                "Instagram" => "https://www.instagram.com/brian_kgtl/"
            ]);


        $manager->persist($u1);
        $manager->flush();
    }
}
