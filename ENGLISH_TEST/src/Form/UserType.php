<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', TextType::class)
            ->add('roles', TextType::class)
            ->add('password', TextType::class)
            ->add('name', TextType::class)
            ->add('gender', ChoiceType::class, [
                'choices' => [
                    'Male' => 'Male',
                    'Female' => 'Female',
                    'Alien' => 'Alien',
                ],
            ])
            ->add('birthdate', DateType::class)
            ->add('nationality', TextType::class)
            ->add('photo', FileType::class)
            ->add('streetNumber', IntegerType::class)
            ->add('streetType', TextType::class)
            ->add('streetName', TextType::class)
            ->add('postcode', TextType::class)
            ->add('city', TextType::class)
            ->add('country', TextType::class)
            ->add('phone', TextType::class)
            ->add('socials', TextType::class)
    ;}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
