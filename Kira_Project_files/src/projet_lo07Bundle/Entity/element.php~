<?php

namespace projet_lo07Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * element
 * @ORM\Table(name="element")
 * @ORM\Entity(repositoryClass="projet_lo07Bundle\Repository\elementRepository")
 */
class element
{
    /**
     * @ORM\ManyToOne(targetEntity="sigle", inversedBy="element")
     * @ORM\JoinColumn(name="sigle_id", referencedColumnName="id")
     */
    private $sigle;

    /**
     * @ORM\ManyToOne(targetEntity="cursus", inversedBy="element")
     * @ORM\JoinColumn(name="cursus_id", referencedColumnName="id")
     */
    private $cursus;

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $semSeq;

    /**
     * @var string
     */
    private $semLabel;

    /**
     * @var bool
     */
    private $utt;

    /**
     * @var string
     */
    private $profil;

    /**
     * @var string
     */
    private $affectation;

    /**
     * @var int
     */
    private $credit;

    /**
     * @var string
     */
    private $resultat;


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
     * Set semSeq
     *
     * @param integer $semSeq
     * @return element
     */
    public function setSemSeq($semSeq)
    {
        $this->semSeq = $semSeq;

        return $this;
    }

    /**
     * Get semSeq
     *
     * @return integer 
     */
    public function getSemSeq()
    {
        return $this->semSeq;
    }

    /**
     * Set semLabel
     *
     * @param string $semLabel
     * @return element
     */
    public function setSemLabel($semLabel)
    {
        $this->semLabel = $semLabel;

        return $this;
    }

    /**
     * Get semLabel
     *
     * @return string 
     */
    public function getSemLabel()
    {
        return $this->semLabel;
    }

    /**
     * Set utt
     *
     * @param boolean $utt
     * @return element
     */
    public function setUtt($utt)
    {
        $this->utt = $utt;

        return $this;
    }

    /**
     * Get utt
     *
     * @return boolean 
     */
    public function getUtt()
    {
        return $this->utt;
    }

    /**
     * Set profil
     *
     * @param string $profil
     * @return element
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return string 
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set affectation
     *
     * @param string $affectation
     * @return element
     */
    public function setAffectation($affectation)
    {
        $this->affectation = $affectation;

        return $this;
    }

    /**
     * Get affectation
     *
     * @return string 
     */
    public function getAffectation()
    {
        return $this->affectation;
    }

    /**
     * Set credit
     *
     * @param integer $credit
     * @return element
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return integer 
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set resultat
     *
     * @param string $resultat
     * @return element
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return string 
     */
    public function getResultat()
    {
        return $this->resultat;
    }
}
