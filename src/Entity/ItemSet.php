<?php

namespace App\Entity;

use App\Repository\ItemSetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ItemSetRepository::class)
 */
class ItemSet
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
    private $itemId1;

    /**
     * @ORM\Column(type="integer")
     */
    private $itemId2;

    /**
     * @ORM\Column(type="integer")
     */
    private $itemId3;

    /**
     * @ORM\Column(type="integer")
     */
    private $itemId4;

    /**
     * @ORM\Column(type="integer")
     */
    private $itemId5;

    /**
     * @ORM\Column(type="integer")
     */
    private $itemId6;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="ItemSet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="integer")
     */
    private $championId;

    /**
     * @ORM\ManyToOne(targetEntity=Champion::class, inversedBy="itemSet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $champion;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getItemId1(): ?int
    {
        return $this->itemId1;
    }

    public function setItemId1(int $itemId1): self
    {
        $this->itemId1 = $itemId1;

        return $this;
    }

    public function getItemId2(): ?int
    {
        return $this->itemId2;
    }

    public function setItemId2(int $itemId2): self
    {
        $this->itemId2 = $itemId2;

        return $this;
    }

    public function getItemId3(): ?int
    {
        return $this->itemId3;
    }

    public function setItemId3(int $itemId3): self
    {
        $this->itemId3 = $itemId3;

        return $this;
    }

    public function getItemId4(): ?int
    {
        return $this->itemId4;
    }

    public function setItemId4(int $itemId4): self
    {
        $this->itemId4 = $itemId4;

        return $this;
    }

    public function getItemId5(): ?int
    {
        return $this->itemId5;
    }

    public function setItemId5(int $itemId5): self
    {
        $this->itemId5 = $itemId5;

        return $this;
    }

    public function getItemId6(): ?int
    {
        return $this->itemId6;
    }

    public function setItemId6(int $itemId6): self
    {
        $this->itemId6 = $itemId6;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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

    public function getChampion(): ?Champion
    {
        return $this->champion;
    }

    public function setChampion(?Champion $champion): self
    {
        $this->champion = $champion;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
