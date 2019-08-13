<?php

namespace MetCardBundle\Form;

use MetCardBundle\Entity\Proceedings;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @method createForm($class, Proceedings $proceedings)
 */
class ProceedingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('POST')
            ->add('proceedings', ChoiceType::class, array(
                'label' => 'POSTĘPOWANIE',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'odsysanie' => 'exhaustion',
                    'wentylacja workiem' => 'ventilation_bag',
                    'rurka ug' => 'tube',
                    'intubacja' => 'intubation',
                    'respirator' => 'respirator',
                    'tlenoterpaia bierna' => 'passive_oxygen_therapy',
                    'defibrylacja' => 'defibrillation',
                    'stymulacja zewnętrzna' => 'external_stimulation',
                    'kardiowersja' => 'cardioversion',
                    'masaż serca' => 'resuscitation',
                    'EKG' => 'ECG',
                    'teletransmisja' => 'transmission',
                    'kołnierz' => 'collar',
                    'deska otopedyczna' => 'long_spine_board',
                    'materac próżniowy' => 'vacuum_mattress',
                    'unieruchomienie' => 'immobilization',
                    'opatrunek' => 'dressing',
                    'linia żylna obwodowa' => 'peripheral_venous',
                    'linia żylna centralna' => 'central_venous',
                    'cewnikowanie' => 'catheterization',
                    'sonda żołądkowa' => 'stomach_probe',
                    'monitorowanie' => 'monitoring',
                    'inne' => 'others')))
            ->add('recommendations', TextareaType::class, ['label' => 'ZALECENIA/UWAGI'])
            ->add('used', TextareaType::class, ['label' => 'ZASTOSOWANE LEKI, WYROBY MEDYCZNE (nazwa, dawka, droga podania)'])
            ->add('add', SubmitType::class, ['label' => 'zapisz']);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => Proceedings::class]);
    }
}