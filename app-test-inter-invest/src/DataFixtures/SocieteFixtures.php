<?php

namespace App\DataFixtures;

use App\Entity\Societe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SocieteFixtures extends Fixture implements DependentFixtureInterface
{

    public function getDependencies()
    {
        return [
            SocieteInfoFixtures::class
        ];
    }

    public function load(ObjectManager $manager): void
    {
        $societeArray = [
            [
                'societe_info' => 'info0'
            ],
            [
                'societe_info' => 'info1'
            ],
            [
                'societe_info' => 'info2'
            ],
        ];

        foreach ($societeArray as $index => $societe) {
            $societeDb = new Societe();
            $societeDb->setSocieteInfo($this->getReference($societe['societe_info']));
            $this->setReference('societe'.$index, $societeDb);

            $manager->persist($societeDb);
        }

        $manager->flush();
    }
}
