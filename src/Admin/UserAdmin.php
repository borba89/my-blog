<?php


namespace App\Admin;

use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('email', TextType::class)
            ->add('role', TextType::class);

    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->tab('General')
            ->with('Content', [
                'class'       => 'col-md-8',
                'box_class'   => 'box box-solid box-danger',
                'description' => 'Lorem ipsum',
            ])

            ->add('email')
            ->add('role')
            ->end()

        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id')
            ->add('email');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')
            ->addIdentifier('email')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

}