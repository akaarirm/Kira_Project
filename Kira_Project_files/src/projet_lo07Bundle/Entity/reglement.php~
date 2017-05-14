<?php

namespace projet_lo07Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reglement
 * @ORM\Table(name="reglement")
 * @ORM\Entity(repositoryClass="projet_lo07Bundle\Repository\reglementRepository")
 */
class reglement
{
    /**
     * @ORM\OneToMany(targetEntity="regle", mappedBy="reglement")
     */
    private $regle;

    /**
     * @ORM\ManyToMany(targetEntity="cursus", inversedBy="reglement")
     * @ORM\JoinColumn(name="gescus")
     */
    private $cursus;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $reglementLabel;


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
     * Set reglementLabel
     *
     * @param string $reglementLabel
     * @return reglement
     */
    public function setReglementLabel($reglementLabel)
    {
        $this->reglementLabel = $reglementLabel;

        return $this;
    }

    /**
     * Get reglementLabel
     *
     * @return string 
     */
    public function getReglementLabel()
    {
        return $this->reglementLabel;
    }
}
