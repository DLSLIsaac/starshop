<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    // Attribute
    #[Route('/')]
    public function homePage(): Response
    {
        return new Response('<strong>StarShop</strong>: your monopoly-busting option for Starship parts!');
    }
}
