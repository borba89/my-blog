<?php
namespace App\Menu;

use App\Entity\Category;
use Knp\Menu\FactoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MenuBuilder extends AbstractController
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     *
     * Add any other dependency you need
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(array $options)
    {
        $menu = $this->factory->createItem('root');

        //$menu->addChild('Home', ['route' => 'post']);
        $items = $this->getDoctrine()->getRepository(Category::class)->findAll();
        foreach ($items as $item) {
            $menu->addChild($item->getNameCategory(), [
                'route'=> 'app_site_postcategory',
                'routeParameters'=> ['slug' => $item->getSlug()]
                //$item->getSlug()
            ]);
        }

        return $menu;
    }
}
