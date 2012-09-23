<?php

namespace Gicsdr\ArmatucanastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gicsdr\ArmatucanastaBundle\Entity\Insumo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Insumo
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
     * @var integer $id_unidad
     *
     * @ORM\Column(name="id_unidad", type="integer")
     */
    private $id_unidad;

    /**
     * @var string $codigo
     *
     * @ORM\Column(name="codigo", type="string", length=255)
     */
    private $codigo;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;


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
     * Set id_unidad
     *
     * @param integer $idUnidad
     * @return Insumo
     */
    public function setIdUnidad($idUnidad)
    {
        $this->id_unidad = $idUnidad;
    
        return $this;
    }

    /**
     * Get id_unidad
     *
     * @return integer 
     */
    public function getIdUnidad()
    {
        return $this->id_unidad;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Insumo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Insumo
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
}
