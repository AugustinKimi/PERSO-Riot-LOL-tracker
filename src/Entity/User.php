<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
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
    private $summonerId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $accountId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $puuid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $summonerName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity=ItemSet::class, mappedBy="user", orphanRemoval=true)
     */
    private $ItemSet;

    public function __construct()
    {
        $this->ItemSet = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSummonerId(): ?string
    {
        return $this->summonerId;
    }

    public function setSummonerId(string $summonerId): self
    {
        $this->summonerId = $summonerId;

        return $this;
    }

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function setAccountId(string $accountId): self
    {
        $this->accountId = $accountId;

        return $this;
    }

    public function getPuuid(): ?string
    {
        return $this->puuid;
    }

    public function setPuuid(string $puuid): self
    {
        $this->puuid = $puuid;

        return $this;
    }

    public function getSummonerName(): ?string
    {
        return $this->summonerName;
    }

    public function setSummonerName(string $summonerName): self
    {
        $this->summonerName = $summonerName;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Collection|ItemSet[]
     */
    public function getItemSet(): Collection
    {
        return $this->ItemSet;
    }

    public function addItemSet(ItemSet $itemSet): self
    {
        if (!$this->ItemSet->contains($itemSet)) {
            $this->ItemSet[] = $itemSet;
            $itemSet->setUser($this);
        }

        return $this;
    }

    public function removeItemSet(ItemSet $itemSet): self
    {
        if ($this->ItemSet->removeElement($itemSet)) {
            // set the owning side to null (unless already changed)
            if ($itemSet->getUser() === $this) {
                $itemSet->setUser(null);
            }
        }

        return $this;
    }
}
