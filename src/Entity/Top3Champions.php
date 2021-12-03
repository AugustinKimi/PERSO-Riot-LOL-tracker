<?php

namespace App\Entity;

use App\Repository\Top3ChampionsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Top3ChampionsRepository::class)
 */
class Top3Champions
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
    private $chamopionName;

    /**
     * @ORM\Column(type="integer")
     */
    private $masteryLevel;

    /**
     * @ORM\Column(type="integer")
     */
    private $masteryPoints;

    /**
     * @ORM\Column(type="integer")
     */
    private $championId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChamopionName(): ?string
    {
        return $this->chamopionName;
    }

    public function setChamopionName(string $chamopionName): self
    {
        $this->chamopionName = $chamopionName;

        return $this;
    }

    public function getMasteryLevel(): ?int
    {
        return $this->masteryLevel;
    }

    public function setMasteryLevel(int $masteryLevel): self
    {
        $this->masteryLevel = $masteryLevel;

        return $this;
    }

    public function getMasteryPoints(): ?int
    {
        return $this->masteryPoints;
    }

    public function setMasteryPoints(int $masteryPoints): self
    {
        $this->masteryPoints = $masteryPoints;

        return $this;
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
}
