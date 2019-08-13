<?php

namespace MetCardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examination
 *
 * @ORM\Table(name="examination")
 * @ORM\Entity(repositoryClass="MetCardBundle\Repository\ExaminationRepository")
 */
class Examination
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var array
     *
     * @ORM\Column(name="glasgow_eyes", type="json_array")
     */
    private $glasgowEyes;

    /**
     * @var array
     *
     * @ORM\Column(name="glasgow_word", type="json_array")
     */
    private $glasgowWord;

    /**
     * @var array
     *
     * @ORM\Column(name="glasgow_move", type="json_array")
     */
    private $glasgowMove;

    /**
     * @var integer
     *
     * @ORM\Column(name="glasgowSum", type="integer")
     */
    private $glasgowSum;

    /**
     * @var array
     *
     * @ORM\Column(name="symptoms", type="json_array")
     */
    private $symptoms;

    /**
     * @var array
     *
     * @ORM\Column(name="others", type="json_array")
     */
    private $others;

    /**
     * @var array
     *
     * @ORM\Column(name="RTSBreathe", type="json_array")
     */
    private $rTSBreathe;

    /**
     * @var array
     *
     * @ORM\Column(name="RTSPressure", type="json_array")
     */
    private $rTSPressure;

    /**
     * @var array
     *
     * @ORM\Column(name="RTSGCS", type="json_array")
     */
    private $rTSGCS;

    /**
     * @var integer
     *
     * @ORM\Column(name="RTSSum", type="integer")
     */
    private $rTSSum;

    /**
     * @var array
     *
     * @ORM\Column(name="skin_look", type="json_array")
     */
    private $skinLook;

    /**
     * @var array
     *
     * @ORM\Column(name="skin_moistness", type="json_array")
     */

    private $skinMoistness;

    /**
     * @var array
     *
     * @ORM\Column(name="skin_temperature", type="json_array")
     */

    private $skinTemperature;

    /**
     * @var integer
     *
     * @ORM\Column(name="respiratorySum", type="integer")
     */

    private $respiratorySum;

    /**
     * @var array
     *
     * @ORM\Column(name="respiratory", type="json_array")
     */
    private $respiratory;

    /**
     * @var string
     *
     * @ORM\Column(name="murmur", type="json_array")
     */
    private $murmur;

    /**
     * @var string
     *
     * @ORM\Column(name="whirr", type="json_array")
     */
    private $whirr;

    /**
     * @var string
     *
     * @ORM\Column(name="wheezing", type="json_array")
     */
    private $wheezing;

    /**
     * @var string
     *
     * @ORM\Column(name="crepitation", type="json_array")
     */
    private $crepitation;

    /**
     * @var string
     *
     * @ORM\Column(name="rale", type="json_array")
     */
    private $rale;

    /**
     * @var string
     *
     * @ORM\Column(name="none", type="json_array")
     */
    private $none;

    /**
     * @var array
     *
     * @ORM\Column(name="other", type="json_array")
     */
    private $other;

    /**
     * @var integer
     *
     * @ORM\Column(name="saturation", type="integer")
     */
    private $saturation;


    /**
     * @var array
     *
     * @ORM\Column(name="abdominal", type="json_array")
     */
    private $abdominal;

    /**
     * @var array
     *
     * @ORM\Column(name="psychomotor", type="json_array")
     */
    private $psychomotor;

    /**
     * @var array
     *
     * @ORM\Column(name="pupil_right_light", type="json_array")
     */
    private $pupilRightLight;

    /**
     * @var array
     *
     * @ORM\Column(name="pupil_left_light", type="json_array")
     */
    private $pupilLeftLight;


    /**
     * @var array
     *
     * @ORM\Column(name="pupil_right_width", type="json_array")
     */
    private $pupilRightWidth;

    /**
     * @var array
     *
     * @ORM\Column(name="pupil_left_width", type="json_array")
     */
    private $pupilLeftWidth;

    /**
     * @var int
     *
     * @ORM\Column(name="bloodpressure", type="integer")
     */
    private $bloodpressure;

    /**
     * @var integer
     *
     * @ORM\Column(name="pulse", type="integer")
     */
    private $pulse;

    /**
     * @var array
     *
     * @ORM\Column(name="pulse_specify", type="json_array")
     */
    private $pulseSpecify;

    /**
     * @var array
     *
     * @ORM\Column(name="heart", type="json_array")
     */
    private $heart;

    /**
     * @var array
     *
     * @ORM\Column(name="paresis", type="json_array")
     */
    private $paresis;

    /**
     * @var array
     *
     * @ORM\Column(name="smell", type="json_array")
     */
    private $smell;

    /**
     * @var int
     *
     * @ORM\Column(name="glucose", type="integer")
     */
    private $glucose;

    /**
     * @var array
     *
     * @ORM\Column(name="ECG", type="json_array")
     */
    private $eCG;

    /**
     * @var array
     *
     * @ORM\Column(name="injuries", type="json_array")
     */
    private $injuries;

    /**
     * @var string
     *
     * @ORM\Column(name="account", type="text", length=255)
     */
    private $account;

    /**
     * @var array
     *
     * @ORM\Column(name="injuries_totality", type="json_array")
     */
    private $injuriesTotality;

    /**
     * @var array
     *
     * @ORM\Column(name="open_fracture", type="json_array")
     */
    private $openFracture;

    /**
     * @var array
     *
     * @ORM\Column(name="closed_fracture", type="json_array")
     */
    private $closedFracture;

    /**
     * @var array
     *
     * @ORM\Column(name="luxation", type="json_array")
     */
    private $luxation;

    /**
     * @var array
     *
     * @ORM\Column(name="abrasion", type="json_array")
     */
    private $abrasion;

    /**
     * @var array
     *
     * @ORM\Column(name="wound", type="json_array")
     */
    private $wound;

    /**
     * @var array
     *
     * @ORM\Column(name="haemorrhage", type="json_array")
     */
    private $haemorrhage;

    /**
     * @var array
     *
     * @ORM\Column(name="mangle", type="json_array")
     */
    private $mangle;

    /**
     * @var array
     *
     * @ORM\Column(name="amputation", type="json_array")
     */
    private $amputation;

    /**
     * @var array
     *
     * @ORM\Column(name="non_traumatic_pain", type="json_array")
     */
    private $nonTraumaticPain;

    /**
     * @var array
     *
     * @ORM\Column(name="burn", type="json_array")
     */
    private $burn;


    /**
     * @var array
     *
     * @ORM\Column(name="air_burn", type="json_array")
     */
    private $airBurn;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set glasgowEyes
     *
     * @param array $glasgowEyes
     *
     * @return Examination
     */
    public function setGlasgowEyes($glasgowEyes)
    {
        $this->glasgowEyes = $glasgowEyes;

        return $this;
    }

    /**
     * Get glasgowEyes
     *
     * @return array
     */
    public function getGlasgowEyes()
    {
        return $this->glasgowEyes;
    }

    /**
     * Set symptoms
     *
     * @param array $symptoms
     *
     * @return Examination
     */
    public function setSymptoms($symptoms)
    {
        $this->symptoms = $symptoms;

        return $this;
    }

    /**
     * Get symptoms
     *
     * @return array
     */
    public function getSymptoms()
    {
        return $this->symptoms;
    }

    /**
     * Set others
     *
     * @param array $others
     *
     * @return Examination
     */
    public function setOthers($others)
    {
        $this->others = $others;

        return $this;
    }

    /**
     * Get others
     *
     * @return array
     */
    public function getOthers()
    {
        return $this->others;
    }

    /**
     * Set rTSBreathe
     *
     * @param array $rTSBreathe
     *
     * @return Examination
     */
    public function setRTSBreathe($rTSBreathe)
    {
        $this->rTSBreathe = $rTSBreathe;

        return $this;
    }

    /**
     * Get rTSBreathe
     *
     * @return array
     */
    public function getRTSBreathe()
    {
        return $this->rTSBreathe;
    }

    /**
     * Set skinLook
     *
     * @param array $skinLook
     *
     * @return Examination
     */
    public function setSkinLook($skinLook)
    {
        $this->skinLook = $skinLook;

        return $this;
    }

    /**
     * Get skinLook
     *
     * @return array
     */
    public function getSkinLook()
    {
        return $this->skinLook;
    }

    /**
     * Set respiratory
     *
     * @param array $respiratory
     *
     * @return Examination
     */
    public function setRespiratory($respiratory)
    {
        $this->respiratory = $respiratory;

        return $this;
    }

    /**
     * Get respiratory
     *
     * @return array
     */
    public function getRespiratory()
    {
        return $this->respiratory;
    }

    /**
     * Set abdominal
     *
     * @param array $abdominal
     *
     * @return Examination
     */
    public function setAbdominal($abdominal)
    {
        $this->abdominal = $abdominal;

        return $this;
    }

    /**
     * Get abdominal
     *
     * @return array
     */
    public function getAbdominal()
    {
        return $this->abdominal;
    }

    /**
     * Set psychomotor
     *
     * @param array $psychomotor
     *
     * @return Examination
     */
    public function setPsychomotor($psychomotor)
    {
        $this->psychomotor = $psychomotor;

        return $this;
    }

    /**
     * Get psychomotor
     *
     * @return array
     */
    public function getPsychomotor()
    {
        return $this->psychomotor;
    }

    /**
     * Set pupilRightLight
     *
     * @param array $pupilRightLight
     *
     * @return Examination
     */
    public function setPupilRightLight($pupilRightLight)
    {
        $this->pupilRightLight = $pupilRightLight;

        return $this;
    }

    /**
     * Get pupilRightLight
     *
     * @return array
     */
    public function getPupilRightLight()
    {
        return $this->pupilRightLight;
    }

    /**
     * Set bloodpressure
     *
     * @param integer $bloodpressure
     *
     * @return Examination
     */
    public function setBloodpressure($bloodpressure)
    {
        $this->bloodpressure = $bloodpressure;

        return $this;
    }

    /**
     * Get bloodpressure
     *
     * @return int
     */
    public function getBloodpressure()
    {
        return $this->bloodpressure;
    }

    /**
     * Set pulse
     *
     * @param integer $pulse
     *
     * @return Examination
     */
    public function setPulse($pulse)
    {
        $this->pulse = $pulse;

        return $this;
    }

    /**
     * Get pulse
     *
     * @return integer
     */
    public function getPulse()
    {
        return $this->pulse;
    }

    /**
     * Set heart
     *
     * @param array $heart
     *
     * @return Examination
     */
    public function setHeart($heart)
    {
        $this->heart = $heart;

        return $this;
    }

    /**
     * Get heart
     *
     * @return array
     */
    public function getHeart()
    {
        return $this->heart;
    }

    /**
     * Set paresis
     *
     * @param array $paresis
     *
     * @return Examination
     */
    public function setParesis($paresis)
    {
        $this->paresis = $paresis;

        return $this;
    }

    /**
     * Get paresis
     *
     * @return array
     */
    public function getParesis()
    {
        return $this->paresis;
    }

    /**
     * Set smell
     *
     * @param array $smell
     *
     * @return Examination
     */
    public function setSmell($smell)
    {
        $this->smell = $smell;

        return $this;
    }

    /**
     * Get smell
     *
     * @return array
     */
    public function getSmell()
    {
        return $this->smell;
    }

    /**
     * Set glucose
     *
     * @param integer $glucose
     *
     * @return Examination
     */
    public function setGlucose($glucose)
    {
        $this->glucose = $glucose;

        return $this;
    }

    /**
     * Get glucose
     *
     * @return int
     */
    public function getGlucose()
    {
        return $this->glucose;
    }

    /**
     * Set eCG
     *
     * @param array $eCG
     *
     * @return Examination
     */
    public function setECG($eCG)
    {
        $this->eCG = $eCG;

        return $this;
    }

    /**
     * Get eCG
     *
     * @return array
     */
    public function getECG()
    {
        return $this->eCG;
    }

    /**
     * Set injuries
     *
     * @param array $injuries
     *
     * @return Examination
     */
    public function setInjuries($injuries)
    {
        $this->injuries = $injuries;

        return $this;
    }

    /**
     * Get injuries
     *
     * @return array
     */
    public function getInjuries()
    {
        return $this->injuries;
    }

    /**
     * Set account
     *
     * @param string $account
     *
     * @return Examination
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @return array
     */
    public function getGlasgowWord()
    {
        return $this->glasgowWord;
    }

    /**
     * @param array $glasgowWord
     */
    public function setGlasgowWord($glasgowWord)
    {
        $this->glasgowWord = $glasgowWord;
    }

    /**
     * @return array
     */
    public function getGlasgowMove()
    {
        return $this->glasgowMove;
    }

    /**
     * @param array $glasgowMove
     */
    public function setGlasgowMove($glasgowMove)
    {
        $this->glasgowMove = $glasgowMove;
    }

    /**
     * @return int
     */
    public function getGlasgowSum()
    {
        return $this->glasgowSum;
    }

    /**
     * @param int $glasgowSum
     */
    public function setGlasgowSum($glasgowSum)
    {
        $this->glasgowSum = $glasgowSum;
    }

    /**
     * @return array
     */
    public function getRTSGCS()
    {
        return $this->rTSGCS;
    }

    /**
     * @param array $rTSGCS
     */
    public function setRTSGCS($rTSGCS)
    {
        $this->rTSGCS = $rTSGCS;
    }

    /**
     * @return array
     */
    public function getRTSPressure()
    {
        return $this->rTSPressure;
    }

    /**
     * @param array $rTSPressure
     */
    public function setRTSPressure($rTSPressure)
    {
        $this->rTSPressure = $rTSPressure;
    }

    /**
     * @return int
     */
    public function getRTSSum()
    {
        return $this->rTSSum;
    }

    /**
     * @param int $rTSSum
     */
    public function setRTSSum($rTSSum)
    {
        $this->rTSSum = $rTSSum;
    }

    /**
     * @return array
     */
    public function getSkinMoistness()
    {
        return $this->skinMoistness;
    }

    /**
     * @param array $skinMoistness
     */
    public function setSkinMoistness($skinMoistness)
    {
        $this->skinMoistness = $skinMoistness;
    }

    /**
     * @return array
     */
    public function getSkinTemperature()
    {
        return $this->skinTemperature;
    }

    /**
     * @param array $skinTemperature
     */
    public function setSkinTemperature($skinTemperature)
    {
        $this->skinTemperature = $skinTemperature;
    }

    /**
     * @return int
     */
    public function getRespiratorySum()
    {
        return $this->respiratorySum;
    }

    /**
     * @param int $respiratorySum
     */
    public function setRespiratorySum($respiratorySum)
    {
        $this->respiratorySum = $respiratorySum;
    }

    /**
     * @return string
     */
    public function getMurmur()
    {
        return $this->murmur;
    }

    /**
     * @param string $murmur
     */
    public function setMurmur($murmur)
    {
        $this->murmur = $murmur;
    }

    /**
     * @return string
     */
    public function getWhirr()
    {
        return $this->whirr;
    }

    /**
     * @param string $whirr
     */
    public function setWhirr($whirr)
    {
        $this->whirr = $whirr;
    }

    /**
     * @return string
     */
    public function getWheezing()
    {
        return $this->wheezing;
    }

    /**
     * @param string $wheezing
     */
    public function setWheezing($wheezing)
    {
        $this->wheezing = $wheezing;
    }

    /**
     * @return string
     */
    public function getCrepitation()
    {
        return $this->crepitation;
    }

    /**
     * @param string $crepitation
     */
    public function setCrepitation($crepitation)
    {
        $this->crepitation = $crepitation;
    }

    /**
     * @return string
     */
    public function getRale()
    {
        return $this->rale;
    }

    /**
     * @param string $rale
     */
    public function setRale($rale)
    {
        $this->rale = $rale;
    }

    /**
     * @return array
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * @param array $other
     */
    public function setOther($other)
    {
        $this->other = $other;
    }

    /**
     * @return string
     */
    public function getNone()
    {
        return $this->none;
    }

    /**
     * @param string $none
     */
    public function setNone($none)
    {
        $this->none = $none;
    }

    /**
     * @return int
     */
    public function getSaturation()
    {
        return $this->saturation;
    }

    /**
     * @param int $saturation
     */
    public function setSaturation($saturation)
    {
        $this->saturation = $saturation;
    }

    /**
     * @return array
     */
    public function getPupilRightWidth()
    {
        return $this->pupilRightWidth;
    }

    /**
     * @param array $pupilRightWidth
     */
    public function setPupilRightWidth($pupilRightWidth)
    {
        $this->pupilRightWidth = $pupilRightWidth;
    }

    /**
     * @return array
     */
    public function getPupilLeftLight()
    {
        return $this->pupilLeftLight;
    }

    /**
     * @param array $pupilLeftLight
     */
    public function setPupilLeftLight($pupilLeftLight)
    {
        $this->pupilLeftLight = $pupilLeftLight;
    }

    /**
     * @return array
     */
    public function getPupilLeftWidth()
    {
        return $this->pupilLeftWidth;
    }

    /**
     * @param array $pupilLeftWidth
     */
    public function setPupilLeftWidth($pupilLeftWidth)
    {
        $this->pupilLeftWidth = $pupilLeftWidth;
    }

    /**
     * @return array
     */
    public function getPulseSpecify()
    {
        return $this->pulseSpecify;
    }

    /**
     * @param array $pulseSpecify
     */
    public function setPulseSpecify($pulseSpecify)
    {
        $this->pulseSpecify = $pulseSpecify;
    }

    /**
     * @return array
     */
    public function getInjuriesTotality()
    {
        return $this->injuriesTotality;
    }

    /**
     * @param array $injuriesTotality
     */
    public function setInjuriesTotality($injuriesTotality)
    {
        $this->injuriesTotality = $injuriesTotality;
    }

    /**
     * @return array
     */
    public function getClosedFracture()
    {
        return $this->closedFracture;
    }

    /**
     * @param array $closedFracture
     */
    public function setClosedFracture($closedFracture)
    {
        $this->closedFracture = $closedFracture;
    }

    /**
     * @return array
     */
    public function getAbrasion()
    {
        return $this->abrasion;
    }

    /**
     * @param array $abrasion
     */
    public function setAbrasion($abrasion)
    {
        $this->abrasion = $abrasion;
    }

    /**
     * @return array
     */
    public function getLuxation()
    {
        return $this->luxation;
    }

    /**
     * @param array $luxation
     */
    public function setLuxation($luxation)
    {
        $this->luxation = $luxation;
    }

    /**
     * @return array
     */
    public function getWound()
    {
        return $this->wound;
    }

    /**
     * @param array $wound
     */
    public function setWound($wound)
    {
        $this->wound = $wound;
    }

    /**
     * @return array
     */
    public function getOpenFracture()
    {
        return $this->openFracture;
    }

    /**
     * @param array $openFracture
     */
    public function setOpenFracture($openFracture)
    {
        $this->openFracture = $openFracture;
    }

    /**
     * @return array
     */
    public function getMangle()
    {
        return $this->mangle;
    }

    /**
     * @param array $mangle
     */
    public function setMangle($mangle)
    {
        $this->mangle = $mangle;
    }

    /**
     * @return array
     */
    public function getAmputation()
    {
        return $this->amputation;
    }

    /**
     * @param array $amputation
     */
    public function setAmputation($amputation)
    {
        $this->amputation = $amputation;
    }

    /**
     * @return array
     */
    public function getBurn()
    {
        return $this->burn;
    }

    /**
     * @param array $burn
     */
    public function setBurn($burn)
    {
        $this->burn = $burn;
    }

    /**
     * @return array
     */
    public function getNonTraumaticPain()
    {
        return $this->nonTraumaticPain;
    }

    /**
     * @param array $nonTraumaticPain
     */
    public function setNonTraumaticPain($nonTraumaticPain)
    {
        $this->nonTraumaticPain = $nonTraumaticPain;
    }

    /**
     * @return array
     */
    public function getHaemorrhage()
    {
        return $this->haemorrhage;
    }

    /**
     * @param array $haemorrhage
     */
    public function setHaemorrhage($haemorrhage)
    {
        $this->haemorrhage = $haemorrhage;
    }

    /**
     * @return array
     */
    public function getAirBurn()
    {
        return $this->airBurn;
    }

    /**
     * @param array $airBurn
     */
    public function setAirBurn($airBurn)
    {
        $this->airBurn = $airBurn;
    }
}

