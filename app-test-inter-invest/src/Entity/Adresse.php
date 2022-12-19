<?php

namespace App\Entity;

use App\Repository\AdresseRepository;
use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * @ORM\Entity(repositoryClass=AdresseRepository::class)
 */
class Adresse implements JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $type_voie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_voie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="integer")
     */
    private $cp;

    /**
     * @ORM\ManyToOne(targetEntity=SocieteInfo::class, inversedBy="adresses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $societe_info;

    public function getId(): int
    {
        return $this->id;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getTypeVoie(): string
    {
        return $this->type_voie;
    }

    public function setTypeVoie(string $type_voie): self
    {
        $this->type_voie = $type_voie;

        return $this;
    }

    public function getNomVoie(): string
    {
        return $this->nom_voie;
    }

    public function setNomVoie(string $nom_voie): self
    {
        $this->nom_voie = $nom_voie;

        return $this;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCp(): int
    {
        return $this->cp;
    }

    public function setCp(int $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getSocieteInfo(): SocieteInfo
    {
        return $this->societe_info;
    }

    public function setSocieteInfo(SocieteInfo $societe_info): self
    {
        $this->societe_info = $societe_info;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'ville' => $this->ville,
            'cp' => $this->cp,
            'type_voie' => $this->type_voie,
            'nom_voie' => $this->nom_voie,
            'numero' => $this->numero,
        ];
    }
}
