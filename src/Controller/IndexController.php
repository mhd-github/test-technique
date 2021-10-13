<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('index/index.html.twig', [
            'articles' => $articleRepository->findAll(),
        ]);
    }
    /**
     * @Route("/show/{slug}", name="show_article")
     */

    public function show($slug, ArticleRepository $articleRepository){
        $article = $articleRepository->findOneBySlug($slug);

        return $this->render('showArticle.html.twig',[
            'article'=>$article
        ]);
    }
}
