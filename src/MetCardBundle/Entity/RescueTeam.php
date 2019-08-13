<?php

namespace MetCardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RescueTeam
 *
 * @ORM\Table(name="rescue_team")
 * @ORM\Entity(repositoryClass="MetCardBundle\Repository\RescueTeamRepository")
 */
class RescueTeam
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
     * @var string
     *
     * @ORM\Column(name="dysponent_ZRM", type="string", length=20)
     */
    private $medicalDispatcher;

    /**
     * @var string
     *
     * @ORM\Column(name="kod_ZRM", type="string", length=10)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="numer_zlecenia", type="string", length=10)
     */
    private $number;

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
     * Get medicalDispatcher
     *
     * @return string
     */
    public function getMedicalDispatcher()
    {
        return $this->medicalDispatcher;
    }

    /**
     * Set medicalDispatcher
     *
     * @param string $medicalDispatcher
     *
     * @return RescueTeam
     */
    public function setMedicalDispatcher($medicalDispatcher)
    {
        $this->medicalDispatcher = $medicalDispatcher;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return RescueTeam
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set number
     *
     * @param string $number
     *
     * @return RescueTeam
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }
}

