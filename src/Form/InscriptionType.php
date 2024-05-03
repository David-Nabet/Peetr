<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // Création des différents champs du formulaire
        $builder
      
        ->add('type', ChoiceType::class, [
            'label' => false,
            'required' => false,
            'attr' => [
                'class' => 'form-control mb-3'
            ],
            'placeholder' => 'Vous êtes un client ou un Prestataire',
            'choices' => [
                'Client' => 'Client',
                'Prestataire' => 'Prestataire',
            ],
        ])
        
        
            ->add('nom', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Votre nom',
                    'class' => 'form-control mb-3 '
                ],
                'constraints' => [
                    new NotNull([
                        'message' => 'Veuillez saisir votre nom'
                    ]),
                    new Length([
                        'min' => 2,
                        'minMessage' => "Votre nom doit contenir au moins {{ limit }} caractères",
                        'max' => 255,
                        'maxMessage' => "Votre nom doit contenir au maximum {{ limit }} caractères"
                    ])
                ] 
            ])
            ->add('prenom', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Votre prénom',
                    'class' => 'form-control mb-3 '
                ],
                'constraints' => [
                    new NotNull([
                        'message' => 'Veuillez saisir votre prénom'
                    ]),
                    new Length([
                        'min' => 2,
                        'minMessage' => "Votre prénom doit contenir au moins {{ limit }} caractères",
                        'max' => 255,
                        'maxMessage' => "Votre prénom doit contenir au maximum {{ limit }} caractères"
                    ])
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Votre email',
                    'class' => 'form-control mb-3 '
                ],
                'constraints' => [
                    new NotNull([
                        'message' => 'Veuillez saisir votre adresse email'
                    ]),
                    new Email([
                        'message' => 'Veuillez saisir votre adresse email'
                    ])
                ]
            ])

            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'les mots de passe ne correspondent pas',
                'required' => true,
                'first_options' => [
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Mot de passe',
                        'class' => 'form-control mb-3 ',
                    ]
                ],
                'second_options' => [
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Confirmer le mot de passe',
                        'class' => 'form-control mb-3 '
                    ]
                ],
                'constraints' => [
                    new NotNull([
                        'message' => 'Veuillez saisir votre mot de passe'
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caractères',
                        'max' => 255,
                        'maxMessage' => 'Votre mot de passe doit contenir au maximum {{ limit }} caractères'
                    ])
                ]
            ])


            ->add('submit', SubmitType::class, [
                'label' => "S'inscrire",
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
