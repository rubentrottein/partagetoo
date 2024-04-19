<?php

namespace App\Controller;

//use App\Entity\Offer;

use App\Repository\OfferRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'default_home', methods: ['GET'])]
    public function home(OfferRepository $offerRepository) : Response
    {
        // On reprend l'ensemble des annonces
            $offers = $offerRepository->findBy(
                [],
                ['id'=>'DESC']
            );
            //$offers = $offerRepository->findAll();
        return $this->render("default/home.html.twig", ['offers' => $offers]);
    }
    #[Route('/about', name: 'default_about', methods: ['GET'])]
    public function about(OfferRepository $offerRepository) : Response
    {
        // Simple page de description
        return $this->render("default/about.html.twig");
    }
    #[Route('/profile', name: 'user_profile', methods: ['GET'])]
    public function profile(UserRepository $userRepository) : Response
    {
        // On récupère les utilisateurs
        $users = $userRepository->findBy(
            [],
            ['username'=>'ASC']
        );
        // Affichage des informations du profil
        return $this->render("user/profile.html.twig", ['users' => $users]);
    }

}