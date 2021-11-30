<?php

namespace App\Entity;

use App\Repository\PlayerIndividualMatchDataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlayerIndividualMatchDataRepository::class)
 */
class PlayerIndividualMatchData
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
    private $summonerName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $championName;

    /**
     * @ORM\Column(type="integer")
     */
    private $championId;

    /**
     * @ORM\Column(type="integer")
     */
    private $kills;

    /**
     * @ORM\Column(type="integer")
     */
    private $deaths;

    /**
     * @ORM\Column(type="integer")
     */
    private $assists;

    /**
     * @ORM\Column(type="integer")
     */
    private $goldEarned;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rank;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tier;

    /**
     * @ORM\Column(type="integer")
     */
    private $leaguePoints;

    /**
     * @ORM\Column(type="integer")
     */
    private $wins;

    /**
     * @ORM\Column(type="integer")
     */
    private $loses;

    /**
     * @ORM\Column(type="integer")
     */
    private $minionsKilled;

    /**
     * @ORM\Column(type="integer")
     */
    private $dommageDealt;

    /**
     * @ORM\Column(type="integer")
     */
    private $largestKillingSpree;

    /**
     * @ORM\Column(type="integer")
     */
    private $spell1Casts;

    /**
     * @ORM\Column(type="integer")
     */
    private $spell2Casts;

    /**
     * @ORM\Column(type="integer")
     */
    private $spell3Casts;

    /**
     * @ORM\Column(type="integer")
     */
    private $spell4Casts;

    /**
     * @ORM\Column(type="integer")
     */
    private $wardUsed;

    /**
     * @ORM\Column(type="integer")
     */
    private $dommageTaken;

    /**
     * @ORM\Column(type="int")
     */
    private $healingDone;

    /**
     * @ORM\Column(type="integer")
     */
    private $gameDuration;

    /**
     * @ORM\Column(type="integer")
     */
    private $summonerSpell1;

    /**
     * @ORM\Column(type="integer")
     */
    private $summonerSpell2;

    /**
     * @ORM\Column(type="integer")
     */
    private $pentakill;

    /**
     * @ORM\Column(type="integer")
     */
    private $quadrakill;

    /**
     * @ORM\Column(type="boolean")
     */
    private $firstTower;

    /**
     * @ORM\Column(type="integer")
     */
    private $drake;

    /**
     * @ORM\Column(type="integer")
     */
    private $tower;

    /**
     * @ORM\Column(type="integer")
     */
    private $baron;

    /**
     * @ORM\Column(type="integer")
     */
    private $herald;

    /**
     * @ORM\Column(type="integer")
     */
    private $profilIconId;

    /**
     * @ORM\Column(type="integer")
     */
    private $playerLevel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lane;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $participantId;

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

    public function getSummonerName(): ?string
    {
        return $this->summonerName;
    }

    public function setSummonerName(string $summonerName): self
    {
        $this->summonerName = $summonerName;

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

    public function getChampionId(): ?int
    {
        return $this->championId;
    }

    public function setChampionId(int $championId): self
    {
        $this->championId = $championId;

        return $this;
    }

    public function getKills(): ?int
    {
        return $this->kills;
    }

    public function setKills(int $kills): self
    {
        $this->kills = $kills;

        return $this;
    }

    public function getDeaths(): ?int
    {
        return $this->deaths;
    }

    public function setDeaths(int $deaths): self
    {
        $this->deaths = $deaths;

        return $this;
    }

    public function getAssists(): ?int
    {
        return $this->assists;
    }

    public function setAssists(int $assists): self
    {
        $this->assists = $assists;

        return $this;
    }

    public function getGoldEarned(): ?int
    {
        return $this->goldEarned;
    }

    public function setGoldEarned(int $goldEarned): self
    {
        $this->goldEarned = $goldEarned;

        return $this;
    }

    public function getRank(): ?string
    {
        return $this->rank;
    }

    public function setRank(string $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getTier(): ?string
    {
        return $this->tier;
    }

    public function setTier(string $tier): self
    {
        $this->tier = $tier;

        return $this;
    }

    public function getLeaguePoints(): ?int
    {
        return $this->leaguePoints;
    }

    public function setLeaguePoints(int $leaguePoints): self
    {
        $this->leaguePoints = $leaguePoints;

        return $this;
    }

    public function getWins(): ?int
    {
        return $this->wins;
    }

    public function setWins(int $wins): self
    {
        $this->wins = $wins;

        return $this;
    }

    public function getLoses(): ?int
    {
        return $this->loses;
    }

    public function setLoses(int $loses): self
    {
        $this->loses = $loses;

        return $this;
    }

    public function getMinionsKilled(): ?int
    {
        return $this->minionsKilled;
    }

    public function setMinionsKilled(int $minionsKilled): self
    {
        $this->minionsKilled = $minionsKilled;

        return $this;
    }

    public function getDommageDealt(): ?int
    {
        return $this->dommageDealt;
    }

    public function setDommageDealt(int $dommageDealt): self
    {
        $this->dommageDealt = $dommageDealt;

        return $this;
    }

    public function getLargestKillingSpree(): ?int
    {
        return $this->largestKillingSpree;
    }

    public function setLargestKillingSpree(int $largestKillingSpree): self
    {
        $this->largestKillingSpree = $largestKillingSpree;

        return $this;
    }

    public function getSpell1Casts(): ?int
    {
        return $this->spell1Casts;
    }

    public function setSpell1Casts(int $spell1Casts): self
    {
        $this->spell1Casts = $spell1Casts;

        return $this;
    }

    public function getSpell2Casts(): ?int
    {
        return $this->spell2Casts;
    }

    public function setSpell2Casts(int $spell2Casts): self
    {
        $this->spell2Casts = $spell2Casts;

        return $this;
    }

    public function getSpell3Casts(): ?int
    {
        return $this->spell3Casts;
    }

    public function setSpell3Casts(int $spell3Casts): self
    {
        $this->spell3Casts = $spell3Casts;

        return $this;
    }

    public function getSpell4Casts(): ?int
    {
        return $this->spell4Casts;
    }

    public function setSpell4Casts(int $spell4Casts): self
    {
        $this->spell4Casts = $spell4Casts;

        return $this;
    }

    public function getWardUsed(): ?int
    {
        return $this->wardUsed;
    }

    public function setWardUsed(int $wardUsed): self
    {
        $this->wardUsed = $wardUsed;

        return $this;
    }

    public function getDommageTaken(): ?int
    {
        return $this->dommageTaken;
    }

    public function setDommageTaken(int $dommageTaken): self
    {
        $this->dommageTaken = $dommageTaken;

        return $this;
    }

    public function getHealingDone(): ?int
    {
        return $this->healingDone;
    }

    public function setHealingDone(int $healingDone): self
    {
        $this->healingDone = $healingDone;

        return $this;
    }

    public function getGameDuration(): ?int
    {
        return $this->gameDuration;
    }

    public function setGameDuration(int $gameDuration): self
    {
        $this->gameDuration = $gameDuration;

        return $this;
    }

    public function getSummonerSpell1(): ?int
    {
        return $this->summonerSpell1;
    }

    public function setSummonerSpell1(int $summonerSpell1): self
    {
        $this->summonerSpell1 = $summonerSpell1;

        return $this;
    }

    public function getSummonerSpell2(): ?int
    {
        return $this->summonerSpell2;
    }

    public function setSummonerSpell2(int $summonerSpell2): self
    {
        $this->summonerSpell2 = $summonerSpell2;

        return $this;
    }

    public function getPentakill(): ?int
    {
        return $this->pentakill;
    }

    public function setPentakill(int $pentakill): self
    {
        $this->pentakill = $pentakill;

        return $this;
    }

    public function getQuadrakill(): ?int
    {
        return $this->quadrakill;
    }

    public function setQuadrakill(int $quadrakill): self
    {
        $this->quadrakill = $quadrakill;

        return $this;
    }

    public function getFirstTower(): ?bool
    {
        return $this->firstTower;
    }

    public function setFirstTower(bool $firstTower): self
    {
        $this->firstTower = $firstTower;

        return $this;
    }

    public function getDrake(): ?int
    {
        return $this->drake;
    }

    public function setDrake(int $drake): self
    {
        $this->drake = $drake;

        return $this;
    }

    public function getTower(): ?int
    {
        return $this->tower;
    }

    public function setTower(int $tower): self
    {
        $this->tower = $tower;

        return $this;
    }

    public function getBaron(): ?int
    {
        return $this->baron;
    }

    public function setBaron(int $baron): self
    {
        $this->baron = $baron;

        return $this;
    }

    public function getHerald(): ?int
    {
        return $this->herald;
    }

    public function setHerald(int $herald): self
    {
        $this->herald = $herald;

        return $this;
    }

    public function getProfilIconId(): ?int
    {
        return $this->profilIconId;
    }

    public function setProfilIconId(int $profilIconId): self
    {
        $this->profilIconId = $profilIconId;

        return $this;
    }

    public function getPlayerLevel(): ?int
    {
        return $this->playerLevel;
    }

    public function setPlayerLevel(int $playerLevel): self
    {
        $this->playerLevel = $playerLevel;

        return $this;
    }

    public function getLane(): ?string
    {
        return $this->lane;
    }

    public function setLane(string $lane): self
    {
        $this->lane = $lane;

        return $this;
    }

    public function getParticipantId(): ?string
    {
        return $this->participantId;
    }

    public function setParticipantId(string $participantId): self
    {
        $this->participantId = $participantId;

        return $this;
    }
}
