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

/**
 * Class PostController
 * @package App\Controller\Api
 */
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

    /**
     * @param Post $post
     *
     *
     * @return Response
     */
    public function getPost(Post $post)
    {

        return new Response($this->createApiResponse(['data' => serialize($post)], 201));
    }

    /**
     * @param $data
     * @param int $statusCode
     *
     * @return Response
     */
    protected function createApiResponse($data, $statusCode = 200)
    {
        $json = $this->serialize($data);

        return new Response($json, $statusCode, array(
            'Content-Type' => 'application/json'
        ));
    }

    /**
     * @param $data
     * @param string $format
     *
     * @return bool|float|int|string
     */
    protected  function  serialize($data, $format = 'json')
    {
        return $this->container->get('serializer')
            ->serialize($data, $format);
    }
}