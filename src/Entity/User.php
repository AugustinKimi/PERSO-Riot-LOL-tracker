<?php

namespace App\Entity;

use App\Repository\UserRepository;
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
    private $profilIconId;

    /**
     * @ORM\Column(type="integer")
     */
    private $summonerLevel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $accessToken;

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

    public function getProfilIconId(): ?string
    {
        return $this->profilIconId;
    }

    public function setProfilIconId(string $profilIconId): self
    {
        $this->profilIconId = $profilIconId;

        return $this;
    }

    public function getSummonerLevel(): ?int
    {
        return $this->summonerLevel;
    }

    public function setSummonerLevel(int $summonerLevel): self
    {
        $this->summonerLevel = $summonerLevel;

        return $this;
    }

    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    public function setAccessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;

        return $this;
    }
}
