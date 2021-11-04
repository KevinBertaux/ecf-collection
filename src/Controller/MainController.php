<?php

namespace App\Controller;

use App\Repository\ItemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ItemRepository $itemRepository): Response
    {
        $items = $itemRepository->findBy([], ['addedAt' => 'DESC']);

        return $this->render('main/index.html.twig', [
            'items' => $items
        ]);
    }
}
