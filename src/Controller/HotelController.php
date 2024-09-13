<?php

namespace App\Controller;

use App\Repository\HotelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HotelController extends AbstractController
{





    #[Route('/hotels', name: 'hotel')]
    public function getHotels(Request $request, HotelRepository $hotelRepository): Response

    {
        //$hotels = $hotelRepository->findAll();

        $criteria = [
            'type_object' => $request->query->get('type_object'),
        ];

        $hotels = $hotelRepository->filterByHotelStandard($criteria);

        return $this->render('hotel.html.twig', [
            'hotels' => $hotels,
        ]);
    }


}