<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AboutController extends AbstractController
{
    #[Route('/a-propos', name: 'app_about', methods: ['GET'], options: ['sitemap' => ['priority' => 0.5], 'i18n' => ['fr' => '/fr/a-propos', 'en' => '/en/about']])]
    public function index(
        ArticleRepository $articleRepository,
        CategoryRepository $categoryRepository
    ): Response {
        return $this->render('about/index.html.twig', [
            'articles' => $articleRepository->findBy([], ['createAt' => 'DESC'], 3),
            'categories' => $categoryRepository->findAll(),
        ]);
    }
}
