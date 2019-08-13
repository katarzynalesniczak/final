<?php

namespace MetCardBundle\Form;

use MetCardBundle\Entity\History;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * @method createForm($class, History $history)
 */
class HistoryType extends AbstractType
{
    const home = 'home';
    const outside = 'outside';
    const street = 'street';
    const work = 'work';
    const school = 'school';
    const agriculture = 'agriculture';

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('POST')
            ->add('describe', TextareaType::class, ['label' => 'OPIS'])
            ->add('place', ChoiceType::class, array('label' => 'MIEJSCE ZDARZENIA', 'choices' => array('w domu' => self::home,
                'w miejscu publicznym' => self::outside, 'w ruchu uliczno-drogowym' => self::street, 'w pracy' => self::work, 'w szkole' => self::school, 'w rolnictwie' => self::agriculture)))
            ->add('add', SubmitType::class, ['label' => 'zapisz']);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => History::class]);
    }
}