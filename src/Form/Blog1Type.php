<?php

namespace App\Form;

use App\Entity\Blog;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Blog1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('autor',TextType::class, [
                'attr' => 
                [
                    'placeholder' => "Ingresa un autor",
                    'class' => 'form-control'
                ]
            ])
            ->add('titulo',TextType::class, [
                'attr' => 
                [
                    'placeholder' => "Ingresa un titulo",
                    'class' => 'form-control'
                ]
            ])
            ->add('fecha', DateType::class)
            ->add('imagen', FileType::class, [
                'mapped' => false,
                'attr' => 
                [
                    'class' => 'form-control'
                ]
            ])
            ->add('texto', TextareaType::class, [
                'attr' => 
                [
                    'placeholder' => "Ingresa una descripcion",
                    'class' => 'form-control',
                    'rows' => 7
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Blog::class,
        ]);
    }
}
