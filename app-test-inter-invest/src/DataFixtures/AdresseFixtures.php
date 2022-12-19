<?php

namespace App\DataFixtures;

use App\Entity\Adresse;
use App\Entity\SocieteInfo;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AdresseFixtures extends Fixture implements DependentFixtureInterface
{

    public function getDependencies()
    {
        return [
            SocieteInfoFixtures::class
        ];
    }

    public function load(ObjectManager $manager): void
    {
        $adresseArray = [
            [
                'numero' => '10',
                'type_voie' => 'rue',
                'nom_voie' => 'du Champ',
                'ville' => 'Paris',
                'cp' => '75001',
                'societe_info' => 'info0'
            ],
            [
                'numero' => '5 Bis',
                'type_voie' => 'chemin',
                'nom_voie' => 'de Traverse',
                'ville' => 'Marseille',
                'cp' => '54000',
                'societe_info' => 'info0'
            ],
            [
                'numero' => '1',
                'type_voie' => 'avenue',
                'nom_voie' => 'de la Poste',
                'ville' => 'Paris',
                'cp' => '75005',
                'societe_info' => 'info1'
            ],
            [
                'numero' => '51',
                'type_voie' => 'boulevard',
                'nom_voie' => 'des Lapins',
                'ville' => 'Limoges',
                'cp' => '12345',
                'societe_info' => 'info2'
            ],
            [
                'numero' => '10',
                'type_voie' => 'rue',
                'nom_voie' => 'du Champ',
                'ville' => 'Paris',
                'cp' => '75001',
                'societe_info' => 'info3'
            ],
            [
                'numero' => '12',
                'type_voie' => 'rue',
                'nom_voie' => 'de la Pompe',
                'ville' => 'Limoges',
                'cp' => '12345',
                'societe_info' => 'info5'
            ],
        ];

        foreach ($adresseArray as $adresse) {
            $adresseDb = new Adresse();
            $adresseDb->setNumero($adresse['numero']);
            $adresseDb->setTypeVoie($adresse['type_voie']);
            $adresseDb->setNomVoie($adresse['nom_voie']);
            $adresseDb->setVille($adresse['ville']);
            $adresseDb->setCp($adresse['cp']);

            $adresseDb->setSocieteInfo($this->getReference($adresse['societe_info']));

            $manager->persist($adresseDb);
        }

        $manager->flush();
    }
}
