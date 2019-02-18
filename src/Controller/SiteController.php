<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\PostRepository;
use App\Repository\CategoryRepository;
//use App\Service\MarkdownHelper;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs;
use Knp\Component\Pager\PaginatorInterface;

class SiteController extends AbstractController
{
    /**
     * @Route("/site/index")
     */
    public function index( Request $request, PaginatorInterface $paginator, /*MarkdownHelper $markdownHelper,*/ PostRepository $repository, Breadcrumbs $breadcrumbs): Response
    {

        $breadcrumbs->addRouteItem('Home', 'app_site_index');
        $posts = $repository->findAllPostQuery();
        $paginationPosts = $paginator->paginate(
            $posts,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('site/index.html.twig', [
            'posts'=> $posts,
            'pagination'=> $paginationPosts,
        ]);

    }

    /**
     * @Route("/site/postcategory/{slug}/{id}", name="app_site_postcategory")
     * @ParamConverter("slug", options={"mapping" : {"slug" : "slug"}})
     * @ParamConverter("post", class="App:Post", options={"mapping" : {"id" : "id"}})
     */
    public function postcategory( $id=1, Post $post, Category $category, Request $request, PaginatorInterface $paginator, PostRepository $repository, Breadcrumbs $breadcrumbs): Response
    {
        $categoryName = $category->getNameCategory();

        $postCategory = $post->getCategory();
        //$breadcrumbs->addRouteItem('Home', 'app_site_postcategory');
        $pos = $repository->findPostsOrderByCategory($id);
        $paginationPosts = $paginator->paginate(
            $pos,
            $request->query->getInt('page', 1),
            10
        );
        //return new Response($postCategory);
        return $this->render('site/postcategory.html.twig', [
            'pos' => $pos,
            'pagination'=> $paginationPosts,
            'categoryName'=> $categoryName,
        ]);
    }

    /**
     * @Route("/site/post")
     */
    public function post()
    {

    }
}