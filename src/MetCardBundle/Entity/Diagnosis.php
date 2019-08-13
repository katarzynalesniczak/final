<?php

namespace MetCardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diagnosis
 *
 * @ORM\Table(name="diagnosis")
 * @ORM\Entity(repositoryClass="MetCardBundle\Repository\DiagnosisRepository")
 */
class Diagnosis
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
     * @ORM\Column(name="specification", type="string", length=10)
     */
    private $specification;

    /**
     * @var string
     *
     * @ORM\Column(name="ICD10", type="string", length=10)
     */
    private $iCD10;

    /**
     * @var string
     *
     * @ORM\Column(name="ICD10_1", type="string", length=10)
     */
    private $iCD101;

    /**
     * @var string
     *
     * @ORM\Column(name="ICD10_2", type="string", length=10)
     */
    private $iCD102;


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
     * Set specification
     *
     * @param string $specification
     *
     * @return Diagnosis
     */
    public function setSpecification($specification)
    {
        $this->specification = $specification;

        return $this;
    }

    /**
     * Get specification
     *
     * @return string
     */
    public function getSpecification()
    {
        return $this->specification;
    }

    /**
     * Set iCD10
     *
     * @param string $iCD10
     *
     * @return Diagnosis
     */
    public function setICD10($iCD10)
    {
        $this->iCD10 = $iCD10;

        return $this;
    }

    /**
     * Get iCD10
     *
     * @return string
     */
    public function getICD10()
    {
        return $this->iCD10;
    }

    /**
     * Set iCD101
     *
     * @param string $iCD101
     *
     * @return Diagnosis
     */
    public function setICD101($iCD101)
    {
        $this->iCD101 = $iCD101;

        return $this;
    }

    /**
     * Get iCD101
     *
     * @return string
     */
    public function getICD101()
    {
        return $this->iCD101;
    }

    /**
     * Set iCD102
     *
     * @param string $iCD102
     *
     * @return Diagnosis
     */
    public function setICD102($iCD102)
    {
        $this->iCD102 = $iCD102;

        return $this;
    }

    /**
     * Get iCD102
     *
     * @return string
     */
    public function getICD102()
    {
        return $this->iCD102;
    }
}

