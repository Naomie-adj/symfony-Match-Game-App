<?php

namespace App\Controller;

use App\Repository\GameRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * Contrôleur pour gérer l'affichage des matchs
 */
class MatchController extends AbstractController
{
    // Page d'accueil - affiche la liste des matchs
    #[Route('/', name: 'match_index')]
    public function index(GameRepository $gameRepo): Response
    {
        // Récuperation des matchs triés par date (plus récent en premier)
        $games = $gameRepo->findBy([], ['playedAt' => 'DESC']);

        // Affiche la page avec la liste des matchs
        return $this->render('match/index.html.twig', [
            'games' => $games,
        ]);
    }
}
