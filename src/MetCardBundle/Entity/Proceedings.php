<?php

namespace MetCardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proceedings
 *
 * @ORM\Table(name="proceedings")
 * @ORM\Entity(repositoryClass="MetCardBundle\Repository\ProceedingsRepository")
 */
class Proceedings
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
     * @ORM\Column(name="proceedings", type="json_array", length=255)
     */
    private $proceedings;

    /**
     * @var string
     *
     * @ORM\Column(name="recommendations", type="string", length=255)
     */
    private $recommendations;

    /**
     * @var string
     *
     * @ORM\Column(name="used", type="string", length=255)
     */
    private $used;


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
     * Set proceedings
     *
     * @param string $proceedings
     *
     * @return Proceedings
     */
    public function setProceedings($proceedings)
    {
        $this->proceedings = $proceedings;

        return $this;
    }

    /**
     * Get proceedings
     *
     * @return string
     */
    public function getProceedings()
    {
        return $this->proceedings;
    }

    /**
     * Set recommendations
     *
     * @param string $recommendations
     *
     * @return Proceedings
     */
    public function setRecommendations($recommendations)
    {
        $this->recommendations = $recommendations;

        return $this;
    }

    /**
     * Get recommendations
     *
     * @return string
     */
    public function getRecommendations()
    {
        return $this->recommendations;
    }

    /**
     * Set used
     *
     * @param string $used
     *
     * @return Proceedings
     */
    public function setUsed($used)
    {
        $this->used = $used;

        return $this;
    }

    /**
     * Get used
     *
     * @return string
     */
    public function getUsed()
    {
        return $this->used;
    }
}

