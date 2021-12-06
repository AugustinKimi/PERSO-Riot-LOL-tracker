<?php

namespace App\Entity;

use App\Repository\ChampionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private $championName;

    /**
     * @ORM\OneToMany(targetEntity=ItemSet::class, mappedBy="champion", orphanRemoval=true)
     */
    private $itemSet;

    public function __construct()
    {
        $this->itemSet = new ArrayCollection();
    }

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

    public function getChampionName(): ?string
    {
        return $this->championName;
    }

    public function setChampionName(string $championName): self
    {
        $this->championName = $championName;

        return $this;
    }

    /**
     * @return Collection|ItemSet[]
     */
    public function getItemSet(): Collection
    {
        return $this->itemSet;
    }

    public function addItemSet(ItemSet $itemSet): self
    {
        if (!$this->itemSet->contains($itemSet)) {
            $this->itemSet[] = $itemSet;
            $itemSet->setChampion($this);
        }

        return $this;
    }

    public function removeItemSet(ItemSet $itemSet): self
    {
        if ($this->itemSet->removeElement($itemSet)) {
            // set the owning side to null (unless already changed)
            if ($itemSet->getChampion() === $this) {
                $itemSet->setChampion(null);
            }
        }

        return $this;
    }
}
