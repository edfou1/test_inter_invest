<?php

namespace App\Entity;

use App\Repository\SocieteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SocieteRepository::class)
 */
class Societe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=SocieteInfo::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $societeInfo;

    /**
     * @ORM\OneToMany(targetEntity=SocieteVersion::class, mappedBy="societe", cascade={"remove"})
     * @ORM\OrderBy({"date_archivage" = "DESC"})
     */
    private $societeVersions;

    public function __construct()
    {
        $this->societeVersions = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSocieteInfo(): SocieteInfo
    {
        return $this->societeInfo;
    }

    public function setSocieteInfo(SocieteInfo $societeInfo): self
    {
        $this->societeInfo = $societeInfo;

        return $this;
    }

    /**
     * @return Collection<int, SocieteVersion>
     */
    public function getSocieteVersions(): Collection
    {
        return $this->societeVersions;
    }

    /**
     * @return array
     */
    public function getSocieteVersionsSerialize(): array
    {
        $versions = [];
        foreach ($this->societeVersions as $version) {
            $versions[] = $version->jsonSerialize();
        }
        return $versions;
    }

    public function addSocieteVersion(SocieteVersion $societeVersion): self
    {
        if (!$this->societeVersions->contains($societeVersion)) {
            $this->societeVersions[] = $societeVersion;
            $societeVersion->setSociete($this);
        }

        return $this;
    }
}
