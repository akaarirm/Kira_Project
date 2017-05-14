<?php

namespace projet_lo07Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigle
 * @ORM\Table(name="sigle")
 * @ORM\Entity(repositoryClass="projet_lo07Bundle\Repository\sigleRepository")
 */
class sigle
{
    /**
     * @ORM\OneToMany(targetEntity="element", mappedBy="sigle")
     */
    private $element;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $categorie;


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
     * Set categorie
     *
     * @param string $categorie
     * @return sigle
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
