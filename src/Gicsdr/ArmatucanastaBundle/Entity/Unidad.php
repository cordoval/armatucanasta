<?php

namespace Gicsdr\ArmatucanastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gicsdr\ArmatucanastaBundle\Entity\Unidad
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Unidad
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
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string $descbreve
     *
     * @ORM\Column(name="descbreve", type="string", length=255)
     */
    private $descbreve;


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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Unidad
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set descbreve
     *
     * @param string $descbreve
     * @return Unidad
     */
    public function setDescbreve($descbreve)
    {
        $this->descbreve = $descbreve;
    
        return $this;
    }

    /**
     * Get descbreve
     *
     * @return string 
     */
    public function getDescbreve()
    {
        return $this->descbreve;
    }
}
