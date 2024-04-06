<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    #[Route('/fr/blog', name: 'app_blog', methods: ['GET'], options: ['sitemap' => ['priority' => 0.5]])]
    public function index(ArticleRepository $articleRepository, CategoryRepository $categoryRepository): Response
    {
        return $this->render('blog/index.html.twig', [
            'articles' => $articleRepository->findAll(),
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    #[Route('/fr/{slug}', name: 'app_category')]
    public function category(string $slug, CategoryRepository $categoryRepository): Response
    {
        return $this->render('blog/category.html.twig', [
            'category' => $categoryRepository->findOneBy(['slug' => $slug]),
            'articles' => $categoryRepository->findOneBy(['slug' => $slug])->getArticles(),
        ]);
    }


    #[Route('/fr/{category}/{slug}', name: 'app_article')]
    public function show(string $slug, string $category, ArticleRepository $articleRepository, CategoryRepository $categoryRepository): Response
    {
        $category = $categoryRepository->findOneBy(['slug' => $category]);
        return $this->render('blog/article.html.twig', [
            'article' => $articleRepository->findOneBy(['slug' => $slug, 'category' => $category]),
            'articles' => $articleRepository->findBy([], ['createAt' => 'DESC'], 3),
        ]);
    }
}
