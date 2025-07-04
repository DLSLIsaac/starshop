<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    // Attribute
    #[Route('/', name: 'app_homepage')]
    public function homePage(StarshipRepository $starshipRepository): Response
    {
      $ships = $starshipRepository->findAll();

      $myShip = $ships[array_rand($ships)];

      return $this->render('main/homepage.html.twig', [
        'myShip' => $myShip,
        'ships' => $ships
      ]);
    }
}
