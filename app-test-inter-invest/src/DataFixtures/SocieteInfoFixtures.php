<?php

namespace App\DataFixtures;

use App\Entity\SocieteInfo;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SocieteInfoFixtures extends Fixture implements DependentFixtureInterface
{

    public function getDependencies()
    {
        return [
            FormeJuridiqueFixture::class
        ];
    }

    public function load(ObjectManager $manager): void
    {
        $societeInfoArray = [
            [
                'formeJuridique' => 10,
                'nom' => 'RATP',
                'siren' => 123456789,
                'ville_immatriculation' => 'Paris',
                'date_immatriculation' => '1946-04-15',
                'capital' => 2
            ],
            [
                'formeJuridique' => 124,
                'nom' => 'test',
                'siren' => 654873994,
                'ville_immatriculation' => 'Caen',
                'date_immatriculation' => '2010-01-28',
                'capital' => 258400
            ],
            [
                'formeJuridique' => 1,
                'nom' => 'uneAutre',
                'siren' => 953487125,
                'ville_immatriculation' => 'Dreux',
                'date_immatriculation' => '1634-12-25',
                'capital' => 11000000
            ],
            [
                'formeJuridique' => 10,
                'nom' => 'RATP',
                'siren' => 123456789,
                'ville_immatriculation' => 'Antibes',
                'date_immatriculation' => '200-05-24',
                'capital' => 500
            ],[

                'formeJuridique' => 10,
                'nom' => 'RATP',
                'siren' => 480994487,
                'ville_immatriculation' => 'Paris',
                'date_immatriculation' => '1946-04-15',
                'capital' => 2
            ],
            [
                'formeJuridique' => 45,
                'nom' => 'autre',
                'siren' => 953487125,
                'ville_immatriculation' => 'Dreux',
                'date_immatriculation' => '1634-12-25',
                'capital' => 11000000
            ]
        ];

        foreach ($societeInfoArray as $key => $societeInfo) {
            $societeInfoDb = new SocieteInfo();
            $societeInfoDb->setNom($societeInfo['nom']);
            $societeInfoDb->setSiren($societeInfo['siren']);
            $societeInfoDb->setVilleImmatriculation($societeInfo['ville_immatriculation']);
            $societeInfoDb->setDateImmatriculation(strtotime($societeInfo['date_immatriculation']));
            $societeInfoDb->setCapital($societeInfo['capital']);

            $societeInfoDb->setFormeJuridique($this->getReference($societeInfo['formeJuridique']));

            $this->setReference('info'.$key, $societeInfoDb);
            $manager->persist($societeInfoDb);
        }

        $manager->flush();
    }
}
