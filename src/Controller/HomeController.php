<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Rooms;

class HomeController extends AbstractController
/**
 * @Route("/home")
 */
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $rooms = $doctrine->getRepository(Rooms::class)->findAll();
        //dd($rooms);
        return $this->render('home/index.html.twig', [
            'rooms' => $rooms,
        ]);
    }

    /**
     * @Route("/details/{id}", name="app_details")
     */
    public function detailsAction(ManagerRegistry $doctrine, $id): Response
    {
        $room = $doctrine->getRepository(Rooms::class)->find($id);
        return $this->render("home/details.html.twig", ['room' => $room]);
    }
}
