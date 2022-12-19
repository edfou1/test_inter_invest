<?php

declare(strict_types=1);

namespace App\Tests\Service;

use App\Entity\Adresse;
use App\Entity\FormeJuridique;
use App\Entity\Societe;
use App\Entity\SocieteInfo;
use App\Repository\SocieteRepository;
use App\Repository\SocieteVersionRepository;
use App\Service\SocieteVersionService;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class SocieteVersionServiceTest
 */
class SocieteVersionServiceTest extends TestCase
{
    /**
     * @return array
     */
    public function getConstructorArgs(): array
    {
        return [
            'societeRepository' => $this->createMock(SocieteRepository::class),
            'societeVersionRepository' => $this->createMock(SocieteVersionRepository::class)
        ];
    }

    /**
     *
     * @return void
     */
    public function testSocieteVersionAddNoDate()
    {
        // parameters
        $id = 5;

        // Mock request bag
        $requestBag = $this->createMock(ParameterBag::class);
        $requestBag
            ->expects($this->once())
            ->method('has')
            ->with('dateArchivage')
            ->willReturn(false);
        // Mock Request
        $request = $this->createMock(Request::class);
        $request->request = $requestBag;


        // args
        $args = $this->getConstructorArgs();
        $service = new SocieteVersionService($args['societeRepository'], $args['societeVersionRepository']);


        // test
        $result = $service->societeVersionAdd($id, $request);
        $this->assertEquals(false, $result);
    }

    /**
     *
     * @return void
     */
    public function testSocieteVersionAddNoSociete()
    {
        // parameters
        $id = 5;

        // Mock request bag
        $requestBag = $this->createMock(ParameterBag::class);
        $requestBag
            ->expects($this->once())
            ->method('has')
            ->with('dateArchivage')
            ->willReturn(true);
        // Mock Request
        $request = $this->createMock(Request::class);
        $request->request = $requestBag;

        // args
        $args = $this->getConstructorArgs();
        $societeRpository = $args['societeRepository'];
        $societeRpository
            ->expects($this->once())
            ->method('find')
            ->with($id)
            ->willReturn(null);
        $service = new SocieteVersionService($args['societeRepository'], $args['societeVersionRepository']);

        // test
        $result = $service->societeVersionAdd($id, $request);
        $this->assertEquals(false, $result);
    }

    /**
     *
     * @return void
     */
    public function testSocieteVersionAdd()
    {
        // parameters
        $id = 5;

        // Forme Juridique
        $formeJuridique = new FormeJuridique();
        $formeJuridique->setLibelle('forme');
        // SocieteInfo
        $societeInfo = new SocieteInfo();
        $societeInfo->setNom('nom');
        $societeInfo->setSiren(10);
        $societeInfo->setVilleImmatriculation('ville');
        $societeInfo->setDateImmatriculation(151545424);
        $societeInfo->setCapital(50);
        $societeInfo->setFormeJuridique($formeJuridique);
        // Adresses
        $adresse1 = new Adresse();
        $adresse1->setNumero('numero1');
        $adresse1->setTypeVoie('type1');
        $adresse1->setNomVoie('nom1');
        $adresse1->setVille('ville1');
        $adresse1->setCp(1);
        $adresse1->setSocieteInfo($societeInfo);
        $societeInfo->addAdresse($adresse1);

        $adresse2 = new Adresse();
        $adresse2->setNumero('numero2');
        $adresse2->setTypeVoie('type2');
        $adresse2->setNomVoie('nom2');
        $adresse2->setVille('ville2');
        $adresse2->setCp(2);
        $adresse2->setSocieteInfo($societeInfo);
        $societeInfo->addAdresse($adresse1);
        // Societe
        $societe = new Societe();
        $societe->setSocieteInfo($societeInfo);

        // Mock request bag
        $requestBag = $this->createMock(ParameterBag::class);
        $requestBag
            ->expects($this->once())
            ->method('has')
            ->with('dateArchivage')
            ->willReturn(true);
        // Mock Request
        $request = $this->createMock(Request::class);
        $request->request = $requestBag;

        // args
        $args = $this->getConstructorArgs();
        $societeRpository = $args['societeRepository'];
        $societeRpository
            ->expects($this->once())
            ->method('find')
            ->with($id)
            ->willReturn($societe);
        $service = new SocieteVersionService($args['societeRepository'], $args['societeVersionRepository']);

        // test
        $result = $service->societeVersionAdd($id, $request);
        $this->assertEquals(true, $result);
    }
}
