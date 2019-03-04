<?php
namespace App\Admin;

use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CategoryAdmin extends AbstractAdmin
{



    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('nameCategory', TextType::class)
            ->add('slug', TextType::class);
            //->add('posts', TextType::class);
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
    $showMapper
        ->tab('General') // the tab call is optional
        ->with('Content', [
            'class'       => 'col-md-8',
            'box_class'   => 'box box-solid box-danger',
            'description' => 'Lorem ipsum',
        ])

    ->add('nameCategory')
    ->add('slug')
    //->add('posts')
    ->end()
    ->end()
    ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id')
                       ->add('nameCategory');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')
                   ->addIdentifier('nameCategory')
                   ->add('_action', null, [
                       'actions' => [
                           'show' => [],
                           'edit' => [],
                           'delete' => [],
                       ],
                   ]);
    }
}