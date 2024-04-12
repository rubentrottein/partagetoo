<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route(path: '/', name: 'default_home', methods: ['GET'])]
    public function home() : Response
    {
        $title = "PartageToo";
        return $this->render("base.html.twig");
    }
}