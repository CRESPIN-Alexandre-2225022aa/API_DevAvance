<?php

namespace App\DataFixtures;

use App\Entity\Flag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $flagUk = New Flag();
        $flagUk->setCountryName('en');
        $flagUk->setFlagURL('https://upload.wikimedia.org/wikipedia/commons/8/83/Flag_of_the_United_Kingdom_%283-5%29.svg');
        $manager->persist($flagUk);

        $flagFr = New Flag();
        $flagFr->setCountryName('fr');
        $flagFr->setFlagURL('https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/2560px-Flag_of_France.svg.png');
        $manager->persist($flagFr);

        $flagDe = New Flag();
        $flagDe->setCountryName('de');
        $flagDe->setFlagURL('https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/2560px-Flag_of_Germany.svg.png');
        $manager->persist($flagDe);

        $manager->flush();
    }
}
