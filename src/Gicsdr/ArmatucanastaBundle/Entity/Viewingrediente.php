<?php

namespace Gicsdr\ArmatucanastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gicsdr\ArmatucanastaBundle\Entity\Viewingrediente
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Viewingrediente
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
     * @var integer $id_plato
     *
     * @ORM\Column(name="id_plato", type="integer")
     */
    private $id_plato;

    /**
     * @var integer $id_unidad
     *
     * @ORM\Column(name="id_unidad", type="integer")
     */
    private $id_unidad;

    /**
     * @var integer $id_insumo
     *
     * @ORM\Column(name="id_insumo", type="integer")
     */
    private $id_insumo;

    /**
     * @var float $cantidad
     *
     * @ORM\Column(name="cantidad", type="decimal")
     */
    private $cantidad;

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
     * @var string $insumocodigo
     *
     * @ORM\Column(name="insumocodigo", type="string", length=255)
     */
    private $insumocodigo;

    /**
     * @var string $insumodescripcion
     *
     * @ORM\Column(name="insumodescripcion", type="string", length=255)
     */
    private $insumodescripcion;


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
     * Set id_plato
     *
     * @param integer $idPlato
     * @return Viewingrediente
     */
    public function setIdPlato($idPlato)
    {
        $this->id_plato = $idPlato;
    
        return $this;
    }

    /**
     * Get id_plato
     *
     * @return integer 
     */
    public function getIdPlato()
    {
        return $this->id_plato;
    }

    /**
     * Set id_unidad
     *
     * @param integer $idUnidad
     * @return Viewingrediente
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
     * Set id_insumo
     *
     * @param integer $idInsumo
     * @return Viewingrediente
     */
    public function setIdInsumo($idInsumo)
    {
        $this->id_insumo = $idInsumo;
    
        return $this;
    }

    /**
     * Get id_insumo
     *
     * @return integer 
     */
    public function getIdInsumo()
    {
        return $this->id_insumo;
    }

    /**
     * Set cantidad
     *
     * @param float $cantidad
     * @return Viewingrediente
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return float 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set unidaddescripcion
     *
     * @param string $unidaddescripcion
     * @return Viewingrediente
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
     * @return Viewingrediente
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

    /**
     * Set insumocodigo
     *
     * @param string $insumocodigo
     * @return Viewingrediente
     */
    public function setInsumocodigo($insumocodigo)
    {
        $this->insumocodigo = $insumocodigo;
    
        return $this;
    }

    /**
     * Get insumocodigo
     *
     * @return string 
     */
    public function getInsumocodigo()
    {
        return $this->insumocodigo;
    }

    /**
     * Set insumodescripcion
     *
     * @param string $insumodescripcion
     * @return Viewingrediente
     */
    public function setInsumodescripcion($insumodescripcion)
    {
        $this->insumodescripcion = $insumodescripcion;
    
        return $this;
    }

    /**
     * Get insumodescripcion
     *
     * @return string 
     */
    public function getInsumodescripcion()
    {
        return $this->insumodescripcion;
    }
}
