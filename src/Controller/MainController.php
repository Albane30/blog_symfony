<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;
use App\Entity\Article;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(ArticleRepository $articleRepository): Response
    {
        $listArticles = $articleRepository->findPublishedArticle();
        return $this->render('front/main/home.html.twig', [
            'articles' => $listArticles,
        ]);
    }

    

    /**
     * @Route("/cgu", name="cgu")
     */
    public function cgu(): Response
    {
        // Nous générons la vue de la page des mentions légales
        return $this->render('front/main/cgu.html.twig');
    }

    /**
     * @Route("/mentions-legales", name="mentions-legales")
     */
    public function mentionsLegales(): Response
    {
        // Nous générons la vue de la page des mentions légales
        return $this->render('front/main/mentions-legales.html.twig');
    }
}
