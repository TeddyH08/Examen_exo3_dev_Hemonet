<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PDFType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Titre', TextType::class, [
                'attr' => [
                    'class' => 'form_content_input'
                ],
                'label' => 'Titre',
                'label_attr' => [
                    'class' => 'form_content_label'
                ]
            ])
            ->add('Texte', TextareaType::class, [
                'attr' => [
                    'class' => 'form_content_input'
                ],
                'label' => 'Texte',
                'label_attr' => [
                    'class' => 'form_content_label'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'submit'
                ],
                'label' => 'Créer le PDF'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
