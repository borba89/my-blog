<?php


namespace App\Form;

use App\Entity\Post;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\SearchType as SymfonySearchType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('query', SymfonySearchType::class, [
              //  'label' => 'Search: '])
            ->add('save', SubmitType::class, ['label' => 'Search', 'attr' => ['class'=>'btn btn-default pull-right']]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}