<?php

namespace MetCardBundle\Form;

use MetCardBundle\Entity\Diagnosis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * @method createForm($class, Diagnosis $diagnosis)
 */
class DiagnosisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('POST')
            ->add('specification', TextareaType::class, ['label' => 'OPIS'])
            ->add('icd10', TextType::class, ['label' => 'KOD ICD 10'])
            ->add('icd10_1', TextType::class, ['label' => 'KOD ICD 10'])
            ->add('icd10_2', TextType::class, ['label' => 'KOD ICD 10'])
            ->add('add', SubmitType::class, ['label' => 'zapisz']);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => Diagnosis::class]);
    }
}