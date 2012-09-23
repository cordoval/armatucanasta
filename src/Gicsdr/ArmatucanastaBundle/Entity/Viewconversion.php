<?php

namespace Gicsdr\ArmatucanastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gicsdr\ArmatucanastaBundle\Entity\Viewconversion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Viewconversion
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
     * @var string $unidad_desde_descripcion
     *
     * @ORM\Column(name="unidad_desde_descripcion", type="string", length=255)
     */
    private $unidad_desde_descripcion;

    /**
     * @var string $unidad_desde_descbreve
     *
     * @ORM\Column(name="unidad_desde_descbreve", type="string", length=255)
     */
    private $unidad_desde_descbreve;

    /**
     * @var string $unidad_hasta_descripcion
     *
     * @ORM\Column(name="unidad_hasta_descripcion", type="string", length=255)
     */
    private $unidad_hasta_descripcion;

    /**
     * @var string $unidad_hasta_descbreve
     *
     * @ORM\Column(name="unidad_hasta_descbreve", type="string", length=255)
     */
    private $unidad_hasta_descbreve;


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
     * @return Viewconversion
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
     * @return Viewconversion
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
     * @return Viewconversion
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

    /**
     * Set unidad_desde_descripcion
     *
     * @param string $unidadDesdeDescripcion
     * @return Viewconversion
     */
    public function setUnidadDesdeDescripcion($unidadDesdeDescripcion)
    {
        $this->unidad_desde_descripcion = $unidadDesdeDescripcion;
    
        return $this;
    }

    /**
     * Get unidad_desde_descripcion
     *
     * @return string 
     */
    public function getUnidadDesdeDescripcion()
    {
        return $this->unidad_desde_descripcion;
    }

    /**
     * Set unidad_desde_descbreve
     *
     * @param string $unidadDesdeDescbreve
     * @return Viewconversion
     */
    public function setUnidadDesdeDescbreve($unidadDesdeDescbreve)
    {
        $this->unidad_desde_descbreve = $unidadDesdeDescbreve;
    
        return $this;
    }

    /**
     * Get unidad_desde_descbreve
     *
     * @return string 
     */
    public function getUnidadDesdeDescbreve()
    {
        return $this->unidad_desde_descbreve;
    }

    /**
     * Set unidad_hasta_descripcion
     *
     * @param string $unidadHastaDescripcion
     * @return Viewconversion
     */
    public function setUnidadHastaDescripcion($unidadHastaDescripcion)
    {
        $this->unidad_hasta_descripcion = $unidadHastaDescripcion;
    
        return $this;
    }

    /**
     * Get unidad_hasta_descripcion
     *
     * @return string 
     */
    public function getUnidadHastaDescripcion()
    {
        return $this->unidad_hasta_descripcion;
    }

    /**
     * Set unidad_hasta_descbreve
     *
     * @param string $unidadHastaDescbreve
     * @return Viewconversion
     */
    public function setUnidadHastaDescbreve($unidadHastaDescbreve)
    {
        $this->unidad_hasta_descbreve = $unidadHastaDescbreve;
    
        return $this;
    }

    /**
     * Get unidad_hasta_descbreve
     *
     * @return string 
     */
    public function getUnidadHastaDescbreve()
    {
        return $this->unidad_hasta_descbreve;
    }
}
