<?php

namespace App\Form;

use App\Entity\Contacto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ContactoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre',TextType::class, [
                'attr' => 
                [
                    'class' => 'form-control'
                ]
            ])
            ->add('correo', TextType::class, [
                'attr' => 
                [
                    'class' => 'form-control'
                ]
            ])
            ->add('Mensaje', TextareaType::class, [
                'attr' => 
                [
                    'class' => 'form-control',
                    'rows' => 7
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contacto::class,
        ]);
    }
}
