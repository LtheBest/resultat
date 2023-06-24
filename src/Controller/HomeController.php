<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\NewsRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function homepage(NewsRepository $newsRepository): Response
    {   
        return $this->render('home/index.html.twig', [
            'news'=>$newsRepository->findAll(),
        ]);
    }
}
