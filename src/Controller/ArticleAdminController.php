<?php
/**
 * Created by PhpStorm.
 * User: cynthia
 * Date: 04/07/19
 * Time: 09:47
 */

namespace App\Controller;


use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleAdminController extends AbstractController
{
    /**
     * @Route("/admin/article/new")
     */
    public function new(EntityManagerInterface $em)
    {
        die('todo');

        return new Response(sprintf('New article id: #%d slug: %s', $article->getId(), $article->getSlug()));
    }
}
