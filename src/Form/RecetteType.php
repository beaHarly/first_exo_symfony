<?php

namespace App\Form;

use App\Entity\Recette;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Categorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class RecetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                "label" => "Nom de la recette",
                "required" => false,
                "attr" => [
                    "placeholder"=>"Le nom de la Recette"
                ]
            ])
            ->add('resumer', TextareaType::class, [
                "label" => "Résumer de la recette",
                "required" => false,
                "attr" => [
                    "rows" => "3"
                ]
            ])
            ->add('preparation', TextareaType::class, [
                "label" => "Préparation de la recette",
                "required" => false,
                "attr" => [
                    "rows" => "5"
                ]
            ])
            ->add('ingredients', TextareaType::class, [
                "label" => "Ingrédients de la recette",
                "required" => false,
                "attr" => [
                    "rows" => "3"
                ]
            ])
            ->add('time', TextType::class, [
                "label" => "Temps de la recette",
                "required" => false,
                "attr" => [
                    "placeholder"=>"Le temps de la Recette"
                ]
            ])
            ->add('peoples', NumberType::class, [
                "label" => "Nombre de personnes de la recette",
                "required" => false,
                "attr" => [
                    "placeholder"=>"Le nombre de personnes de la Recette"
                ]
            ])
            ->add('categorie', EntityType::class , [
                "label" => "Choix de catégorie",
                "class" => Categorie::class,
                "choice_label" => "nom"
            ])
            ->add('imageFile', FileType::class, [
                "label" => "Image de la recette", 
                "required" => false
            ])
            ->add('createdAt')
            ->add('categorie', EntityType::class , [
                "label" => "Choix de catégorie",
                "class" => Categorie::class,
                "choice_label" => "nom"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Recette::class,
        ]);
    }
}
