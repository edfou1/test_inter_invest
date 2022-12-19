<?php

namespace App\Entity;

use App\Repository\SocieteVersionRepository;
use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * @ORM\Entity(repositoryClass=SocieteVersionRepository::class)
 */
class SocieteVersion implements JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $date_archivage;

    /**
     * @ORM\ManyToOne(targetEntity=Societe::class, inversedBy="societeVersions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $societe;

    /**
     * @ORM\OneToOne(targetEntity=SocieteInfo::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $societe_info;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateArchivage(): int
    {
        return $this->date_archivage;
    }

    public function setDateArchivage(int $date_archivage): self
    {
        $this->date_archivage = $date_archivage;

        return $this;
    }

    public function getSociete(): Societe
    {
        return $this->societe;
    }

    public function setSociete(Societe $societe): self
    {
        $this->societe = $societe;

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
            'date_archivage' => $this->date_archivage,
            'societe_info' => $this->societe_info->jsonSerialize()
        ];
    }
}
