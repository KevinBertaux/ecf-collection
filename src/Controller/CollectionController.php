<?php

namespace App\Controller;

use App\Repository\GatheringRepository;
use App\Repository\ItemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CollectionController extends AbstractController
{
    /**
     * @Route("/collection", name="collection")
     */
    public function index(GatheringRepository $gatheringRepository, ItemRepository $itemRepository): Response
    {
        $gatherings = $gatheringRepository->findAll();
        $items = $itemRepository->findAll();

        return $this->render('collection/index.html.twig', [
            'gatherings' => $gatherings,
            'items' => $items
        ]);
    }
}
