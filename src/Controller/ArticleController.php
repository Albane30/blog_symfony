<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;
use App\Entity\Article;
use Datetime;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Comment;
use App\Form\CommentType;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article/search-json", name="article_search_json", methods={"GET"})
     */
    public function searchJson(Request $request, ArticleRepository $articleRepository): Response
    {
       $terms = $request->get('terms');
       $articles = $articleRepository->findByTerms($terms); 
       
       return new JsonResponse($articles);
    }

    /**
     * @Route("/article/search", name="article_search", methods={"GET"})
     */
    public function search(): Response
    {
        return $this->render('front/article/search.html.twig');
    
    }

    /**
     * @Route("/article/{id}", name="showMain", methods={"GET", "POST"})
     */
    public function show(Request $request, Article $article): Response
    {   
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $comment->setCreatedAt(new DateTime('now'))
                ->setArticle($article);
            $entityManager->persist($comment);
            $entityManager->flush();
            
            return $this->redirectToRoute('showMain', ['id' => $article->getId()]);
        }
        
        return $this->render('front/main/show.html.twig', [
            'article' => $article,
            'comment' => $comment,
            'form' => $form->createView()
        ]);


    }

    
}
