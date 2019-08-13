<?php

namespace MetCardBundle\Form;

use MetCardBundle\Entity\RescueTeam;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * @method createForm($class, RescueTeam $team)
 */
class RescueTeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('POST')
            ->add('medicalDispatcher', TextType::class, ['label'=>'DYSPONENT ZRM'])
            ->add('code', TextType::class, ['label'=>'KOD ZRM'])
            ->add('number', TextType::class, ['label'=>'NUMER ZLECENIA'])
            ->add('add', SubmitType::class, ['label' => 'zatwierdź']);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => RescueTeam::class]);
    }
}