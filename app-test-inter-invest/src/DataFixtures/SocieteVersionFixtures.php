<?php

namespace App\DataFixtures;

use App\Entity\SocieteVersion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SocieteVersionFixtures extends Fixture implements DependentFixtureInterface
{

    public function getDependencies()
    {
        return [
            SocieteInfoFixtures::class,
            SocieteFixtures::class
        ];
    }

    public function load(ObjectManager $manager): void
    {
        $societeVersionArray = [
            [
                'societe' => 'societe0',
                'societe_info' => 'info3',
                'date_archivage' => '2022-10-04 15:24:43'
            ],
            [
                'societe' => 'societe0',
                'societe_info' => 'info4',
                'date_archivage' => '1995-12-21 01:10:00'
            ],
            [
                'societe' => 'societe2',
                'societe_info' => 'info5',
                'date_archivage' => '2021-02-15 21:00:10'
            ],
        ];

        foreach ($societeVersionArray as $societeVersion) {
            $societeVersionDb = new SocieteVersion();

            $societeVersionDb->setSocieteInfo($this->getReference($societeVersion['societe_info']));
            $societeVersionDb->setSociete($this->getReference($societeVersion['societe']));
            $societeVersionDb->setDateArchivage(strtotime($societeVersion['date_archivage']));

            $manager->persist($societeVersionDb);
        }

        $manager->flush();
    }
}
