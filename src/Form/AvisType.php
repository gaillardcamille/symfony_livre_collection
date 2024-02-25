<?php

namespace App\Form;

use App\Entity\Avis;
use App\Entity\Livre;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AvisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('commentaire')
            ->add('date_creation')
            ->add('note')
            ->add('statut')
            ->add('user', EntityType::class, [
                'class' => User::class,
'choice_label' => 'id',
            ])
            ->add('livre', EntityType::class, [
                'class' => Livre::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
        ]);
    }
}
