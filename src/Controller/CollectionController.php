<?php

namespace App\Controller;

use App\Entity\Gathering;
use App\Repository\GatheringRepository;
use App\Repository\ItemRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CollectionController extends AbstractController
{
    /**
     * @Route("/collection", name="collection")
     */
    public function index(GatheringRepository $gatheringRepository, ItemRepository $itemRepository, EntityManager $entityManager): Response
    {
        $gatherings = $gatheringRepository->findAll();
        $items = $itemRepository->findAll();
        $entityManager = Gathering::class;

        return $this->render('collection/index.html.twig', [
            'gatherings' => $gatherings,
            'items' => $items
        ]);
    }
}
