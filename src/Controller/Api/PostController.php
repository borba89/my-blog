<?php

namespace App\Controller\Api;

use App\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use Swagger\Annotations as SWG;



class PostController extends AbstractController
{
    /**
     * @Route("/api/post/{title}", methods={"GET"}, name="app_api_post")
     * @SWG\Response(
     *     response=200,
     *     @SWG\Schema(
     *         type="array",
     *         @SWG\Items(ref=@Model(type=Post::class))
     *     )
     * )
     * @SWG\Parameter(
     *     name="title",
     *     in="query",
     *     type="string",
     *     description="The field used to title posts"
     * )
     * @SWG\Tag(name="post")
     * @Security(name="Bearer")
     *
     */

    public function getPost(Post $post)
    {
        /*$data = $request->getContent();
        $post = new Post($data['nickname'], $data['avatarNumber']);
        $post->setTags($data['tagline']);
        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();*/

        ///$data = $post->getTitle();


        return new Response($this->createApiResponse(['data' => json_encode($post)], 201));

    }

    protected function createApiResponse($data, $statusCode = 200)
    {
        $json = $this->serialize($data);

        return new Response($json, $statusCode, array(
            'Content-Type' => 'application/json'
        ));
    }

    protected  function  serialize($data, $format = 'json')
    {
        return $this->container->get('serializer')
            ->serialize($data, $format);
    }
}