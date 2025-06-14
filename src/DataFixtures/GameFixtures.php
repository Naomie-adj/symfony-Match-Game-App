<?php

namespace App\DataFixtures;

use App\Entity\Game;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GameFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $teams = ['PSG', 'FC BARCELONE', 'REAL MADRID', 'MANCHESTER UNITED', 'LIVERPOOL', 'MANCHESTER CITY'];

        for ($i = 0; $i < 10; $i++) {
            $game = new Game();
            $game->setTeam1($teams[array_rand($teams)]);
            $game->setTeam2($teams[array_rand($teams)]);
            $game->setScore(rand(0, 5));
            $game->setPlayedAt(new \DateTimeImmutable(sprintf('-%d days', rand(0, 30))));

            $manager->persist($game);
        }

        $manager->flush();
    }
}