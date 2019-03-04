<?php

namespace App\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class PostController extends AbstractController
{
    /**
     * @Route("/api/post")
     * @Method("POST")
     */

    public function newAction(Request $request)
    {
         $data = $request->getContent();
         return new Response($data);
    }
}