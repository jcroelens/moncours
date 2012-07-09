<?php

namespace EDiff\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EDiff\Bundle\AdminBundle\Entity\Matiere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="EDiff\Bundle\AdminBundle\Entity\MatiereRepository")
 */
class Matiere
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $libelle
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;


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
     * Set libelle
     *
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    
    /**
     * Methode __toString()
     */
    public function __toString(){
    	return $this->libelle;
    }
}