<?php

namespace App\Event\Listener;

use App\Entity\Category;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Presta\SitemapBundle\Event\SitemapPopulateEvent;
use Presta\SitemapBundle\Sitemap\Url\UrlConcrete;

class SitemapSubscriber implements EventSubscriberInterface
{

    public function __construct(private CategoryRepository $categoryRepository, private ArticleRepository $articleRepository)
    {
    }
    /**
     * @inheritdoc
     */
    public static function getSubscribedEvents()
    {
        return [
            SitemapPopulateEvent::class => 'populate',
        ];
    }

    /**
     * @param SitemapPopulateEvent $event
     */
    public function populate(SitemapPopulateEvent $event): void
    {
        $categorys = $this->categoryRepository->findAll();

        /** @var Category $pv */

        $urlContainer = $event->getUrlContainer();
        $urlGenerator = $event->getUrlGenerator();

        foreach ($categorys as $category) {
            $url = new UrlConcrete(
                $urlGenerator->generate('product_show', [
                    'slug' => $category->getSlug(),
                ], UrlGeneratorInterface::ABSOLUTE_URL),
            );

            $urlContainer->addUrl($url, 'category');
        }

        $articles = $this->articleRepository->findAll();

        foreach ($articles as $article) {
            $url = new UrlConcrete(
                $urlGenerator->generate('article_show', [
                    'slug' => $article->getSlug(),
                ], UrlGeneratorInterface::ABSOLUTE_URL),
            );

            $urlContainer->addUrl($url, 'article');
        }
    }
}
