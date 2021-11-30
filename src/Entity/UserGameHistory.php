<?php

namespace App\Entity;

use App\Repository\UserGameHistoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserGameHistoryRepository::class)
 */
class UserGameHistory
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
    private $gameId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userId;

    /**
     * @ORM\Column(type="integer")
     */
    private $gameDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGameId(): ?string
    {
        return $this->gameId;
    }

    public function setGameId(string $gameId): self
    {
        $this->gameId = $gameId;

        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getGameDate(): ?int
    {
        return $this->gameDate;
    }

    public function setGameDate(int $gameDate): self
    {
        $this->gameDate = $gameDate;

        return $this;
    }
}
