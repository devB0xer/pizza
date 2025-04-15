<?php

namespace App\Controller;

use App\Repository\PizzaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MenuPageController extends AbstractController
{
    #[Route('/menu', name: 'app_menu')]
    public function index(PizzaRepository $pizzaRepository): Response
    {
        $pizzas = $pizzaRepository->findAll();

        return $this->render('menu_page/index.html.twig', [
            'pizzas' => $pizzas,
        ]);
    }
}
