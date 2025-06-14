<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Entité Game (représente un match de football)
 */
#[ORM\Entity(repositoryClass: GameRepository::class)]
class Game
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // équipe1
    #[ORM\Column(length: 255)]
    private ?string $team1 = null;

    // équipe2
    #[ORM\Column(length: 255)]
    private ?string $team2 = null;

    // Score du match (format: (2-1))
    #[ORM\Column(length: 255)]
    private ?string $score = null;

    // Date et heure du match
    #[ORM\Column]
    private ?\DateTimeImmutable $playedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTeam1(): ?string
    {
        return $this->team1;
    }

    public function setTeam1(string $team1): static
    {
        $this->team1 = $team1;
        return $this;
    }

    public function getTeam2(): ?string
    {
        return $this->team2;
    }

    public function setTeam2(string $team2): static
    {
        $this->team2 = $team2;
        return $this;
    }

    public function getScore(): ?string
    {
        return $this->score;
    }

    public function setScore(string $score): static
    {
        if (!str_contains($score, '-')) {
            $this->score = '(' . $score . '-0)';
        } else {
            $this->score = '(' . $score . ')';
        }
        return $this;
    }

    public function getPlayedAt(): ?\DateTimeImmutable
    {
        return $this->playedAt;
    }

    public function setPlayedAt(\DateTimeImmutable $playedAt): static
    {
        $this->playedAt = $playedAt;
        return $this;
    }
}
