<?php

namespace projet_lo07Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cursus
 * @ORM\Table(name="cursus")
 * @ORM\Entity(repositoryClass="projet_lo07Bundle\Repository\cursusRepository")
 */
class cursus
{
    /**
     * @ORM\ManyToOne(targetEntity="etudiant", inversedBy="cursus")
     * @ORM\JoinColumn(name="etudiant_id", referencedColumnName="id")
     */
    private $etudiant;

    /**
     * @ORM\OneToMany(targetEntity="element", mappedBy="cursus")
     */
    private $element;

    /**
     * @ORM\ManyToMany(targetEntity="reglement", mappedBy="cursus")
     */
    private $reglement;

    /**
     * @var int
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     */
    private $admission;

    /**
     * @var string
     */
    private $filiere;


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
     * Set admission
     *
     * @param string $admission
     * @return cursus
     */
    public function setAdmission($admission)
    {
        $this->admission = $admission;

        return $this;
    }

    /**
     * Get admission
     *
     * @return string 
     */
    public function getAdmission()
    {
        return $this->admission;
    }

    /**
     * Set filiere
     *
     * @param string $filiere
     * @return cursus
     */
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get filiere
     *
     * @return string 
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return cursus
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
