<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Comment;
use App\Entity\Post;
use App\Form\CommentType;
use App\Form\PostType;
use App\Form\SearchType;
use App\Repository\PostRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use WhiteOctober\BreadcrumbsBundle\Model\Breadcrumbs;
use Knp\Component\Pager\PaginatorInterface;
use App\Service\SendNotification;
use Mgilet\NotificationBundle\Twig\NotificationExtension;

/**
 * Class SiteController
 * @package App\Controller
 */
class SiteController extends AbstractController
{
    /**
     * @Route("site/index", name="app_site_index")
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @param PostRepository $repository
     * @param Breadcrumbs $breadcrumbs
     *
     * @return Response
     */
    public function index( Request $request, PaginatorInterface $paginator,  PostRepository $repository, Breadcrumbs $breadcrumbs): Response
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
     * @param Post $post
     * @param Category $category
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @param PostRepository $repository
     * @param Breadcrumbs $breadcrumbs
     *
     * @return Response
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
     * @param Post $post
     * @param Request $request
     * @param PostRepository $repository
     * @param Breadcrumbs $breadcrumbs
     *
     * @return Response
     */
    public function post(Post $post, Request $request, PostRepository $repository, Breadcrumbs $breadcrumbs)
    {
        $comment = new Comment();
        $post->addComment($comment);
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $comment->setCreateAt(\DateTime::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s')) );
            $comment->setModifiedAt(\DateTime::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s')));
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
        }

        $comments = $post->getComments();

        $postName = $post->getTitle();
        $breadcrumbs->addItem('Home', '/site/index');
        $breadcrumbs->addItem($postName, 'app_site_post', ["%title%" => $postName]);
        return $this->render('site/post.html.twig', [
            'breadcrumbs'=>$breadcrumbs,
            'postName'=> $postName,
            'post'=> $post,
            'form'=> $form->createView(),
            'comments'=>$comments,
        ]);
    }

    /**
     * @Route("/site/search", name="app_site_search")
     */
    public function search(Request $request, Breadcrumbs $breadcrumbs)
    {
        $breadcrumbs->addItem('Home', '/site/index');
        $breadcrumbs->addItem('Search', 'app_site_post', ["%title%" => 'Search']);
        $searchForm = $this->createForm(SearchType::class);
        $searchForm->handleRequest($request);
        return $this->render('site/search.html.twig', [
            'searchForm'=>$searchForm->createView(),
        ]);
    }

    /**
     * @Route("/send-notification", name="send_notification")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function sendNotification(Request $request)
    {
        $manager = $this->get('mgilet.notification');
        $notif = $manager->createNotification('Hello world !');
        $notif->setMessage('This a notification.');
        $notif->setLink('http://symfony.com/');

        // $manager->createNotification('Notification subject','Some random text','http://google.fr');

        $manager->addNotification(array($this->getUser()), $notif, true);

        return $this->redirectToRoute('/site/index');
    }
}