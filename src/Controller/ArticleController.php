<?php
/**
 * Created by PhpStorm.
 * User: boris
 * Date: 25.12.18
 * Time: 20:12
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController
{
    /**
     * @Route("/")
     */

    public function homepage()
    {
        return new Response('OMG! My first page already! WOOO!');
    }

    /**
     * @Route("/news/why-asteroids-taste-like-bacon")
     */
    public function show()
    {
        return new Response('Future page to show one space article!');
    }
}