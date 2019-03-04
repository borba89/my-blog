<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Post;
use App\Form\PostType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\PostRepository;
use App\Repository\CategoryRepository;
//use App\Service\MarkdownHelper;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Psr\Container\ContainerInterface;
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
        $post = new Post();

        $form = $this->createForm(PostType::class, $post)
        ;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($post);
            $entityManager->flush();

            return $this->redirectToRoute('app_site_index');
        }
        $breadcrumbs->addRouteItem('Home', 'app_site_index');
        $query = $request->query->get('q');
        $search = $repository->findPostsByQuery($query);
        $posts = $repository->findAllPostQuery();
        $paginationPosts = $paginator->paginate(
            $posts,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('site/index.html.twig', [
            'posts'=> $posts,
            'pagination'=> $paginationPosts,
            'form'=> $form->createView(),
            'search' => $search,
            'query' => $query,
        ]);

    }

    /**
     * @Route("/site/postcategory/{slug}", name="app_site_postcategory")
     * @ParamConverter("slug", options={"mapping" : {"slug" : "slug"}})
     *
     */
    public function postcategory(Post $post, Category $category, Request $request, PaginatorInterface $paginator, PostRepository $repository, Breadcrumbs $breadcrumbs)
    {
        $categoryName = $category->getNameCategory();
        $postCategoryId = $post->getCategory()->getId();
        $breadcrumbs->addItem('Home', '/site/index');
        $breadcrumbs->addItem($categoryName, 'app_site_postcategory', ["%slug%" => $post->getSlug()]);
        $pos = $repository->findPostsOrderByCategory($postCategoryId);
        $paginationPosts = $paginator->paginate(
            $pos,
            $request->query->getInt('page', 1),
            10
        );


        return $this->render('site/postcategory.html.twig', [
            'pos' => $pos,
            'pagination'=> $paginationPosts,
            'categoryName'=> $categoryName,

        ]);
    }

    /**
     * @Route("/site/post/{title}", name="app_site_post")
     * @ParamConverter("title", options={"mapping" : {"title" : "title"}})
     */
    public function post(Post $post, Request $request, PostRepository $repository, Breadcrumbs $breadcrumbs)
    {
        $postName = $post->getTitle();
        $breadcrumbs->addItem('Home', '/site/index');
        $breadcrumbs->addItem($postName, 'app_site_post', ["%title%" => $postName]);
        return $this->render('site/post.html.twig', [
            'breadcrumbs'=>$breadcrumbs,
            'postName'=> $postName,
            'post'=> $post,
        ]);
    }

}