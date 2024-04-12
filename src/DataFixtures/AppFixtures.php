<?php

namespace App\DataFixtures;

use App\Entity\Offer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $currentDate = new \DateTimeImmutable();

        for ($i = 0; $i < 5; $i++) {
            $offer = new Offer();
            $offer->setTitle('Annonce N°'.$i)
                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, consequatur consequuntur iusto labore natus officia provident vero. Accusamus aperiam dignissimos dolorem exercitationem expedita facilis id iure officia possimus reprehenderit.')
                ->setUpdatedAt($currentDate);
            $manager->persist($offer);
        }

        $manager->flush();
    }
}
