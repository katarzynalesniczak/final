<?php

namespace MetCardBundle\Form;

use MetCardBundle\Entity\Data;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @method createForm($class, Data $data)
 */
class DataType extends AbstractType
{
    const hospital = 'hospital';
    const refuse = 'refuse';

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('POST')
            ->add('name', TextType::class, ['label' => 'IMIĘ PACJENTA'])
            ->add('surname', TextType::class, ['label' => 'NAZWISKO PACJENTA'])
            ->add('address', TextType::class, ['label' => 'ADRES ZAMIESZKANIA PACJENTA'])
            ->add('street', TextType::class, ['label' => 'ULICA'])
            ->add('flat', TextType::class, ['label' => 'NUMER DOMU/MIESZKANIA'])
            ->add('identification', TextType::class, ['label' => 'DOKUMENT TOŻSAMOŚCI(rodzaj i nr'])
            ->add('nFZ', TextType::class, ['label' => 'IDENTYFIKATOR NFZ'])
            ->add('dateOfBirth', TextType::class, ['label' => 'DATA URODZENIA PACJENTA'])
            ->add('personalIdentityNumber', TextType::class, ['label' => 'PESEL PACJENTA'])
            ->add('helpDate', TextType::class, ['label' => 'DATA UDZIELENIA POMOCY'])
            ->add('decision', ChoiceType::class, array('label' => 'DECYZJA', 'choices' => array('przyjęcie pacjenta' => self::hospital,
                'odmowa przyjęcia' => self::refuse)))
            ->add('handover', TextType::class, ['label' => 'PRZEKAZANIE PACJENTA(data i godzina)'])
            ->add('dead', TextType::class, ['label' => 'STWIERDZENIE ZGONU/ODSTĄPIENIE OD MCR(data i godzina)'])
            ->add('add', SubmitType::class, ['label' => 'zapisz i zakończ']);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => Data::class]);
    }
}