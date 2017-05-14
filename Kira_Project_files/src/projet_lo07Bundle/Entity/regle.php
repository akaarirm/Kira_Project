<?php

namespace projet_lo07Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * regle
 * @ORM\Table(name="regle")
 * @ORM\Entity(repositoryClass="projet_lo07Bundle\Repository\regleRepository")
 */
class regle
{
    /**
     * @ORM\ManyToOne(targetEntity="reglement", inversedBy="regle")
     * @ORM\JoinColumn(name="reglement_id", referencedColumnName="id")
     */
    private $reglement;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $agregat;

    /**
     * @var string
     */
    private $cible;

    /**
     * @var string
     */
    private $etape;

    /**
     * @var int
     */
    private $seuil;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set agregat
     *
     * @param string $agregat
     * @return regle
     */
    public function setAgregat($agregat)
    {
        $this->agregat = $agregat;

        return $this;
    }

    /**
     * Get agregat
     *
     * @return string 
     */
    public function getAgregat()
    {
        return $this->agregat;
    }

    /**
     * Set cible
     *
     * @param string $cible
     * @return regle
     */
    public function setCible($cible)
    {
        $this->cible = $cible;

        return $this;
    }

    /**
     * Get cible
     *
     * @return string 
     */
    public function getCible()
    {
        return $this->cible;
    }

    /**
     * Set etape
     *
     * @param string $etape
     * @return regle
     */
    public function setEtape($etape)
    {
        $this->etape = $etape;

        return $this;
    }

    /**
     * Get etape
     *
     * @return string 
     */
    public function getEtape()
    {
        return $this->etape;
    }

    /**
     * Set seuil
     *
     * @param integer $seuil
     * @return regle
     */
    public function setSeuil($seuil)
    {
        $this->seuil = $seuil;

        return $this;
    }

    /**
     * Get seuil
     *
     * @return integer 
     */
    public function getSeuil()
    {
        return $this->seuil;
    }
}
