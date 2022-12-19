<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * @ORM\Entity(repositoryClass=SocieteInfoRepository::class)
 */
class SocieteInfo implements JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $siren;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_immatriculation;

    /**
     * @ORM\Column(type="integer")
     */
    private $date_immatriculation;

    /**
     * @ORM\Column(type="integer")
     */
    private $capital;

    /**
     * @ORM\ManyToOne(targetEntity=FormeJuridique::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $forme_juridique;

    /**
     * @ORM\OneToMany(targetEntity=Adresse::class, mappedBy="societe_info", cascade={"remove", "persist"})
     */
    private $adresses;

    public function __construct()
    {
        $this->adresses = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getSiren(): ?int
    {
        return $this->siren;
    }

    public function setSiren(int $siren): self
    {
        $this->siren = $siren;

        return $this;
    }

    public function getVilleImmatriculation(): string
    {
        return $this->ville_immatriculation;
    }

    public function setVilleImmatriculation(string $ville_immatriculation): self
    {
        $this->ville_immatriculation = $ville_immatriculation;

        return $this;
    }

    public function getDateImmatriculation(): int
    {
        return $this->date_immatriculation;
    }

    public function setDateImmatriculation(int $date_immatriculation): self
    {
        $this->date_immatriculation = $date_immatriculation;

        return $this;
    }

    public function getCapital(): int
    {
        return $this->capital;
    }

    public function setCapital(int $capital): self
    {
        $this->capital = $capital;

        return $this;
    }

    public function getFormeJuridique(): FormeJuridique
    {
        return $this->forme_juridique;
    }

    public function setFormeJuridique(FormeJuridique $forme_juridique): self
    {
        $this->forme_juridique = $forme_juridique;

        return $this;
    }

    /**
     * @return Collection<int, Adresse>
     */
    public function getAdresses(): Collection
    {
        return $this->adresses;
    }

    /**
     * @return array
     */
    public function getAdressesSerialize(): array
    {
        $adresses = [];
        foreach ($this->adresses as $adresse) {
            $adresses[] = $adresse->jsonSerialize();
        }
        return $adresses;
    }

    public function addAdresse(Adresse $adresse): self
    {
        if (!$this->adresses->contains($adresse)) {
            $this->adresses[] = $adresse;
            $adresse->setSocieteInfo($this);
        }

        return $this;
    }

    public function removeAdresse(Adresse $adresse): self
    {
        $this->adresses->removeElement($adresse);

        return $this;
    }

    public function jsonSerialize(): array
    {
        $adresses = $this->getAdressesSerialize();
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'siren' => $this->siren,
            'capital' => $this->capital,
            'ville_immatriculation' => $this->ville_immatriculation,
            'date_immatriculation' => $this->date_immatriculation,
            'forme_juridique' => $this->forme_juridique,
            'adresses' => $adresses,
        ];
    }
}
