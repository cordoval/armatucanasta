<?php

namespace Gicsdr\ArmatucanastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gicsdr\ArmatucanastaBundle\Entity\Conversion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Conversion
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
     * @var integer $id_unidad_desde
     *
     * @ORM\Column(name="id_unidad_desde", type="integer")
     */
    private $id_unidad_desde;

    /**
     * @var integer $id_unidad_hasta
     *
     * @ORM\Column(name="id_unidad_hasta", type="integer")
     */
    private $id_unidad_hasta;

    /**
     * @var float $factor
     *
     * @ORM\Column(name="factor", type="decimal")
     */
    private $factor;


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
     * Set id_unidad_desde
     *
     * @param integer $idUnidadDesde
     * @return Conversion
     */
    public function setIdUnidadDesde($idUnidadDesde)
    {
        $this->id_unidad_desde = $idUnidadDesde;
    
        return $this;
    }

    /**
     * Get id_unidad_desde
     *
     * @return integer 
     */
    public function getIdUnidadDesde()
    {
        return $this->id_unidad_desde;
    }

    /**
     * Set id_unidad_hasta
     *
     * @param integer $idUnidadHasta
     * @return Conversion
     */
    public function setIdUnidadHasta($idUnidadHasta)
    {
        $this->id_unidad_hasta = $idUnidadHasta;
    
        return $this;
    }

    /**
     * Get id_unidad_hasta
     *
     * @return integer 
     */
    public function getIdUnidadHasta()
    {
        return $this->id_unidad_hasta;
    }

    /**
     * Set factor
     *
     * @param float $factor
     * @return Conversion
     */
    public function setFactor($factor)
    {
        $this->factor = $factor;
    
        return $this;
    }

    /**
     * Get factor
     *
     * @return float 
     */
    public function getFactor()
    {
        return $this->factor;
    }
}
