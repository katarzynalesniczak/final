<?php

namespace MetCardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Data
 *
 * @ORM\Table(name="data")
 * @ORM\Entity(repositoryClass="MetCardBundle\Repository\DataRepository")
 */
class Data
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
     * @ORM\Column(name="name", type="string", length=20)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=30)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=50)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=30)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="flat", type="string", length=10)
     */
    private $flat;

    /**
     * @var string
     *
     * @ORM\Column(name="identification", type="string", length=50)
     */
    private $identification;

    /**
     * @var string
     *
     * @ORM\Column(name="NFZ", type="string", length=3)
     */
    private $nFZ;

    /**
     * @var string
     *
     * @ORM\Column(name="date_of_birth", type="string", length=8)
     */
    private $dateOfBirth;

    /**
     * @var int
     *
     * @ORM\Column(name="personal_identity_number", type="integer")
     */
    private $personalIdentityNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="help_date", type="integer")
     */
    private $helpDate;

    /**
     * @var array
     *
     * @ORM\Column(name="decision", type="json_array")
     */
    private $decision;

    /**
     * @var string
     *
     * @ORM\Column(name="handover", type="string", length=12)
     */
    private $handover;

    /**
     * @var string
     *
     * @ORM\Column(name="dead", type="string", length=12)
     */
    private $dead;


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
     * Set name
     *
     * @param string $name
     *
     * @return Data
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Data
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Data
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return Data
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set flat
     *
     * @param string $flat
     *
     * @return Data
     */
    public function setFlat($flat)
    {
        $this->flat = $flat;

        return $this;
    }

    /**
     * Get flat
     *
     * @return string
     */
    public function getFlat()
    {
        return $this->flat;
    }

    /**
     * Set identification
     *
     * @param string $identification
     *
     * @return Data
     */
    public function setIdentification($identification)
    {
        $this->identification = $identification;

        return $this;
    }

    /**
     * Get identification
     *
     * @return string
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * Set nFZ
     *
     * @param string $nFZ
     *
     * @return Data
     */
    public function setNFZ($nFZ)
    {
        $this->nFZ = $nFZ;

        return $this;
    }

    /**
     * Get nFZ
     *
     * @return string
     */
    public function getNFZ()
    {
        return $this->nFZ;
    }

    /**
     * Set dateOfBirth
     *
     * @param string $dateOfBirth
     *
     * @return Data
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set personalIdentityNumber
     *
     * @param integer $personalIdentityNumber
     *
     * @return Data
     */
    public function setPersonalIdentityNumber($personalIdentityNumber)
    {
        $this->personalIdentityNumber = $personalIdentityNumber;

        return $this;
    }

    /**
     * Get personalIdentityNumber
     *
     * @return int
     */
    public function getPersonalIdentityNumber()
    {
        return $this->personalIdentityNumber;
    }

    /**
     * Set helpDate
     *
     * @param integer $helpDate
     *
     * @return Data
     */
    public function setHelpDate($helpDate)
    {
        $this->helpDate = $helpDate;

        return $this;
    }

    /**
     * Get helpDate
     *
     * @return int
     */
    public function getHelpDate()
    {
        return $this->helpDate;
    }

    /**
     * Set decision
     *
     * @param array $decision
     *
     * @return Data
     */
    public function setDecision($decision)
    {
        $this->decision = $decision;

        return $this;
    }

    /**
     * Get decision
     *
     * @return array
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * Set handover
     *
     * @param string $handover
     *
     * @return Data
     */
    public function setHandover($handover)
    {
        $this->handover = $handover;

        return $this;
    }

    /**
     * Get handover
     *
     * @return string
     */
    public function getHandover()
    {
        return $this->handover;
    }

    /**
     * Set dead
     *
     * @param string $dead
     *
     * @return Data
     */
    public function setDead($dead)
    {
        $this->dead = $dead;

        return $this;
    }

    /**
     * Get dead
     *
     * @return string
     */
    public function getDead()
    {
        return $this->dead;
    }
}

