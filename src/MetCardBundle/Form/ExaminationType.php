<?php

namespace MetCardBundle\Form;

use MetCardBundle\Entity\Examination;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @method createForm($class, Examination $examination)
 */
class ExaminationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('POST')
            ->add('glasgowEyes', ChoiceType::class, array(
                'label' => 'OTWIERANIE OCZU',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'spontaniczne(4)' => 'spontaneously',
                    'na głos(3)' => 'voice',
                    'na ból(2)' => 'pain',
                    'brak(1)' => 'none')))
            ->add('glasgowWord', ChoiceType::class, array(
                'label' => 'REAKCJA SŁOWNA',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'zorientowany(5)' => 'oriented',
                    'splątany(4)' => 'confuse',
                    'niewłaściwe słowa(3)' => 'inappropriate',
                    'niezrozumiałe dźwięki(2)' => 'understandable',
                    'brak(1)' => 'none')))
            ->add('glasgowMove', ChoiceType::class, array(
                'label' => 'REAKCJA RUCHOWA',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'wykonuje polecenia(6)' => 'task',
                    'lokalizuje ból(5)' => 'pain',
                    'ucieka od bólu(4)' => 'runaway',
                    'zgięciowa(3)' => 'fold',
                    'wyprostna(2)' => 'extensor',
                    'brak(1)' => 'none'
                )))
            ->add('glasgowSum', TextType::class, ['label' => 'SUMA'])
            ->add('symptoms', ChoiceType::class, array(
                'label' => 'OBJAWY',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'wstrząs' => 'shock',
                    'NZK' => 'cardiac_arrest',
                    'objawy oponowe' => 'meningeal',
                    'drgawki' => 'jactitation',
                    'afazja' => 'aphasia',
                    'wymioty' => 'vomit',
                    'biegunka' => 'diarrhoea',
                    'krwawienie' => 'bleeding',
                    'obrzęki' => 'swelling',
                    'zasłabnięcie' => 'collapse'
                )))
            ->add('others', ChoiceType::class, array(
                'label' => 'INNE',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'ciąża' => 'pregnant',
                    'poród' => 'labor',
                    'choroba zakaźna' => 'zymosis'
                )))
            ->add('rTSBreathe', ChoiceType::class, array(
                'label' => 'CZĘSTOŚĆ ODDECHÓW',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    '10-19(4)' => 'normal',
                    '>29(3)' => 'fast',
                    '6-9(2)' => 'slow',
                    '1-5(1)' => 'low',
                    'brak(0)' => 'none'
                )))
            ->add('rTSPressure', ChoiceType::class, array(
                'label' => 'RR SKURCZOWE',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    '>89(4)' => 'normal',
                    '76-89(3)' => 'low',
                    '50-75(2)' => 'lower',
                    '1-49(1)' => 'small',
                    '0(0)' => 'none'
                )))
            ->add('rTSGCS', ChoiceType::class, array(
                'label' => 'GCS',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    '13-15(4)' => 'good',
                    '9-12(3)' => 'notbad',
                    '6-8(2)' => 'worse',
                    '4-5(1)' => 'bad',
                    '3(0)' => 'worst'
                )))
            ->add('rTSSum', TextType::class, ['label' => 'SUMA'])
            ->add('skinLook', ChoiceType::class, array(
                'label' => 'WYGLĄD SKÓRY',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'w normie' => 'normal',
                    'blada' => 'pale',
                    'rumień' => 'erythema',
                    'zażółcenie' => 'icteric',
                    'sinica obwodowa' => 'cyanosis_peripheral',
                    'sinica centralna' => 'cyanosis_central')))
            ->add('skinMoistness', ChoiceType::class, array(
                'label' => 'WILGOTNOŚĆ SKÓRY',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'w normie' => 'normal',
                    'wilgotna' => 'steamy',
                    'sucha' => 'dry'
                )))
            ->add('skinTemperature', ChoiceType::class, array(
                'label' => 'TEMPERATURA SKÓRY',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'w normie' => 'normal',
                    'chłodna' => 'cold',
                    'ciepła' => 'warm'
                )))
            ->add('respiratorySum', TextType::class, ['label' => 'CZĘSTOŚĆ ODDECHÓW NA MINUTĘ']
            )
            ->add('respiratory', ChoiceType::class, array(
                'label' => 'UKŁAD ODDECHOWY',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'duszność' => 'dyspnea',
                    'sinica' => 'cyanosis',
                    'bezdech' => 'apnea'
                )))
            ->add('murmur', ChoiceType::class, array(
                'label' => 'SZMER PRAWIDŁOWY',
                'choices' => array(
                    'obydwa płuca' => 'both',
                    'prawe płuco' => 'right',
                    'lewe płuco' => 'left'
                )))
            ->add('whirr', ChoiceType::class, array(
                'label' => 'FURCZENIE',
                'choices' => array(
                    'obydwa płuca' => 'both',
                    'prawe płuco' => 'right',
                    'lewe płuco' => 'left'
                )))
            ->add('wheezing', ChoiceType::class, array(
                'label' => 'ŚWISTY',
                'choices' => array(
                    'obydwa płuca' => 'both',
                    'prawe płuco' => 'right',
                    'lewe płuco' => 'left'
                )))
            ->add('crepitation', ChoiceType::class, array(
                'label' => 'TRZESZCZENIE',
                'choices' => array(
                    'obydwa płuca' => 'both',
                    'prawe płuco' => 'right',
                    'lewe płuco' => 'left'
                )))
            ->add('rale', ChoiceType::class, array(
                'label' => 'RZĘŻENIE',
                'choices' => array(
                    'obydwa płuca' => 'both',
                    'prawe płuco' => 'right',
                    'lewe płuco' => 'left'
                )))
            ->add('none', ChoiceType::class, array(
                'label' => 'BRAK SZMERU',
                'choices' => array(
                    'obydwa płuca' => 'both',
                    'prawe płuco' => 'right',
                    'lewe płuco' => 'left'
                )))
            ->add('other', TextType::class, ['label' => 'INNE'])
            ->add('saturation', TextType::class, ['label' => 'SATURACJA(%)'])
            ->add('abdominal', ChoiceType::class, array(
                'label' => 'JAMA BRZUSZNA',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'w normie' => 'normal',
                    'bolesność palpacyjna' => 'pain',
                    'brak perystaltyki' => 'none',
                    'objawy otrzewnowe' => 'peritoneal'
                )))
            ->add('psychomotor', ChoiceType::class, array(
                'label' => 'OCENA PSYCHORUCHOWA',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'w normie' => 'normal',
                    'spowolniały' => 'slowdown',
                    'pobudzony' => 'stimulated',
                    'agresywny' => 'aggressive'
                )))
            ->add('pupilRightLight', ChoiceType::class, array(
                'label' => 'REAKCJA ŹRENICY PRAWEJ NA ŚWIATŁO',
                'choices' => array(
                    'prawidłowa' => 'good',
                    'powolna' => 'bad',
                    'brak' => 'none'
                )))
            ->add('pupilLeftLight', ChoiceType::class, array(
                'label' => 'REAKCJA ŹRENICY LEWEJ NA ŚWIATŁO',
                'choices' => array(
                    'prawidłowa' => 'good',
                    'powolna' => 'bad',
                    'brak' => 'none'
                )))
            ->add('pupilRightWidth', ChoiceType::class, array(
                'label' => 'SZEROKOŚĆ ŹRENICY PRAWEJ',
                'choices' => array(
                    'normalna' => 'normal',
                    'wąska' => 'slimline',
                    'szeroka' => 'wide'
                )))
            ->add('pupilLeftWidth', ChoiceType::class, array(
                'label' => 'SZEROKOŚĆ ŹRENICY LEWEJ',
                'choices' => array(
                    'normalna' => 'normal',
                    'wąska' => 'slimline',
                    'szeroka' => 'wide'
                )))
            ->add('bloodpressure', TextType::class, ['label' => 'CIŚNENIE TĘTNICZE(mm Hg)'])
            ->add('pulse', TextType::class, ['label' => 'TĘTNO(na minutę)'])
            ->add('pulseSpecify', ChoiceType::class, array(
                'label' => 'TĘTNO',
                'choices' => array(
                    'miarowe' => 'regular',
                    'niemiarowe' => 'arrhythmic'
                )))
            ->add('heart', ChoiceType::class, array(
                'label' => 'TONY SERCA',
                'choices' => array(
                    'czyste/głośne' => 'clear',
                    'stłumione' => 'mute',
                    'inne' => 'other'
                )))
            ->add('paresis', ChoiceType::class, array(
                'label' => 'NIEDOWŁAD/PORAŻENIE',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'kończyny górnej prawej' => 'upper_right',
                    'kończyny górnej lewej' => 'upper_left',
                    'kończyny dolnej prawej' => 'lower_right',
                    'kończyny dolnej lewej' => 'lower_left'
                )))
            ->add('smell', ChoiceType::class, array(
                'label' => 'ZAPACH Z UST',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'rozpuszczalnik organiczny' => 'solvent',
                    'alkohol' => 'alcohol',
                    'inne' => 'other'
                )))
            ->add('glucose', TextType::class, ['label' => 'POZIOM GLUKOZY(mg% lub g/l'])
            ->add('eCG', ChoiceType::class, array(
                'label' => 'EKG',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'rytm zatokowy' => 'normal',
                    'tachykardia nadkomorowa' => 'tachycardia_supraventricular',
                    'tachykardia komorowa' => 'tachycardia_ventricular',
                    'migotanie/trzepotanie przedsionków' => 'AF',
                    'AV blok' => 'AV',
                    'sVES' => 'sVES',
                    'VES' => 'VES',
                    'VF/VT' => 'VF_VT',
                    'asystolia' => 'asystole',
                    'PEA' => 'PEA',
                    'rozrusznik' => 'pacemaker',
                    'OZW' => 'ACS',
                    'zawał' => 'cardiac_arrest',
                    'inne' => 'others',
                )))
            ->add('injuriesTotality', ChoiceType::class, array(
                'label' => 'OBRAŻENIA',
                'choices' => array(
                    'tak' => 'yes',
                    'nie' => 'no'
                )))
            ->add('openFracture', TextareaType::class, ['label' => 'ZŁAMANIE OTWARTE(przód, tył, lewa, prawa strona)']
            )
            ->add('closedFracture', TextareaType::class, ['label' => 'ZŁAMANIE ZAMKNIĘTE(lewa, prawa strona)']
            )
            ->add('luxation', TextareaType::class, ['label' => 'ZWICHNIĘCIE(lewa, prawa strona)']
            )
            ->add('abrasion', TextareaType::class, ['label' => 'STŁUCZENIE(przód, tył, lewa, prawa strona)']
            )
            ->add('wound', TextareaType::class, ['label' => 'RANA(przód, tył, lewa, prawa strona)']
            )
            ->add('haemorrhage', TextareaType::class, ['label' => 'KRWOTOK Z RANY(przód, tył, lewa, prawa strona)']
            )
            ->add('mangle', TextareaType::class, ['label' => 'ZMIAŻDŻENIE(przód, tył, lewa, prawa strona)']
            )
            ->add('amputation', TextareaType::class, ['label' => 'AMPUTACJA(lewa, prawa strona)']
            )
            ->add('nonTraumaticPain', TextareaType::class, ['label' => 'BÓL NIEURAZOWY(przód, tył, lewa, prawa strona)']
            )
            ->add('burn', TextareaType::class, ['label' => 'OPARZENIE(przód, tył, lewa, prawa strona, stopień, %)']
            )
            ->add('airBurn', ChoiceType::class, array(
                'label' => 'OPARZENIE WZIEWNE',
                'choices' => array(
                    'tak' => 'yes',
                    'nie' => 'no'
                )))
            ->add('injuries', ChoiceType::class, array(
                'label' => 'OBRAŻENIA ANATOMICZNE KWALIFIKUJĄCE DO CENTRUM URAZOWEGO',
                'multiple' => true,
                'expanded' => true,
                'choices' => array(
                    'penetrujące rany głowy i tułowia lub urazy tępe z objawami uszkodzenia narządów wewnętrznych głowy, klatki piersiowe lub brzucha' => 'trauma',
                    'amputacja kończyny powyżej kolana lub łokcia' => 'amputation',
                    'rozległe zmiażdżenia kończyn' => 'pulp',
                    'uszkodzenie rdzenia kręgowego' => 'spinal_cord',
                    'złamanie kończyny z uszkodzeniem naczyń i nerwów' => 'break_damage',
                    'złamanie minimum dwóch proksymalnych kości długich kończyn lub miednicy' => 'break_two'
                )))
            ->add('account', TextareaType::class, ['label' => 'OPIS'])
            ->add('add', SubmitType::class, ['label' => 'zapisz',
                'attr'=>['class'=>'']]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => Examination::class]);
    }
}