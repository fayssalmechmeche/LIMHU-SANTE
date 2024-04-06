<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage', methods: ['GET'], options: ['sitemap' => ['priority' => 0.5]])]
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('homepage/index.html.twig', [
            'articles' => $articleRepository->findBy([], ['createAt' => 'DESC'], 3)
        ]);
    }
}
