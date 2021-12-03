<?php

namespace App\Entity;

use App\Repository\ChampionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChampionRepository::class)
 */
class Champion
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
    private $championId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $chaampionName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChampionId(): ?int
    {
        return $this->championId;
    }

    public function setChampionId(int $championId): self
    {
        $this->championId = $championId;

        return $this;
    }

    public function getChaampionName(): ?string
    {
        return $this->chaampionName;
    }

    public function setChaampionName(string $chaampionName): self
    {
        $this->chaampionName = $chaampionName;

        return $this;
    }
}
