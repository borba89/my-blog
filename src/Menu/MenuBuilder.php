<?php
namespace App\Menu;

use App\Entity\Category;
use Knp\Menu\FactoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class MenuBuilder
 * @package App\Menu
 */
class MenuBuilder extends AbstractController
{
    /**
     * @var FactoryInterface
     */
    private $factory;

    /**
     * MenuBuilder constructor.
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param array $options
     *
     * @return \Knp\Menu\ItemInterface
     */
    public function createMainMenu(array $options)
    {
        $menu = $this->factory->createItem('root');
        $items = $this->getDoctrine()->getRepository(Category::class)->findAll();
        foreach ($items as $item) {
            $menu->addChild($item->getNameCategory(), [
                'route'=> 'app_site_postcategory',
                'routeParameters'=> ['slug' => $item->getSlug()]
            ]);
        }

        return $menu;
    }
}
