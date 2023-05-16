<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DentController extends AbstractController
{
    #[Route('/dent', name: 'app_dent')]
    public function index(): Response
    {
        return $this->render('dent/index.html.twig', [
            'controller_name' => 'DentController',
        ]);
    }
}
