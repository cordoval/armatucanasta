<?php

namespace Gicsdr\ArmatucanastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gicsdr\ArmatucanastaBundle\Entity\Viewinsumo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Viewinsumo
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
     * @var string $unidaddescripcion
     *
     * @ORM\Column(name="unidaddescripcion", type="string", length=255)
     */
    private $unidaddescripcion;

    /**
     * @var string $unidaddescbreve
     *
     * @ORM\Column(name="unidaddescbreve", type="string", length=255)
     */
    private $unidaddescbreve;


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
     * @return Viewinsumo
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
     * @return Viewinsumo
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
     * @return Viewinsumo
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
     * Set unidaddescripcion
     *
     * @param string $unidaddescripcion
     * @return Viewinsumo
     */
    public function setUnidaddescripcion($unidaddescripcion)
    {
        $this->unidaddescripcion = $unidaddescripcion;
    
        return $this;
    }

    /**
     * Get unidaddescripcion
     *
     * @return string 
     */
    public function getUnidaddescripcion()
    {
        return $this->unidaddescripcion;
    }

    /**
     * Set unidaddescbreve
     *
     * @param string $unidaddescbreve
     * @return Viewinsumo
     */
    public function setUnidaddescbreve($unidaddescbreve)
    {
        $this->unidaddescbreve = $unidaddescbreve;
    
        return $this;
    }

    /**
     * Get unidaddescbreve
     *
     * @return string 
     */
    public function getUnidaddescbreve()
    {
        return $this->unidaddescbreve;
    }
}
