<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    // Attribute
    #[Route('/')]
    public function homePage(): Response
    {
      $starshipCount = 457;

      $myShip = [
        'name' => 'USS LeafyCruiser (NCC-0001)',
        'class' => 'Garden',
        'captain' => 'Jean-Luc Pickles',
        'status' => 'under construction'
      ];

      return $this->render('main/homepage.html.twig', [
        'numberOfStarships' => $starshipCount,
        'myShip' => $myShip
      ]);
    }
}
