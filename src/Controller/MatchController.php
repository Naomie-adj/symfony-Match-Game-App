<?php

namespace App\Controller;

use App\Repository\GameRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MatchController extends AbstractController
{
    #[Route('/', name: 'match_index')]
    public function index(GameRepository $gameRepo): Response
    {
        $games = $gameRepo->findBy([], ['playedAt' => 'DESC']);

        return $this->render('match/index.html.twig', [
            'games' => $games,
        ]);
    }
}
