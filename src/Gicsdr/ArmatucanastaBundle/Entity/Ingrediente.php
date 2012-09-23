<?php

namespace Gicsdr\ArmatucanastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gicsdr\ArmatucanastaBundle\Entity\Ingrediente
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Ingrediente
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
     * @ORM\Column(name="cantidad", type="float")
     */
    private $cantidad;


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
     * @return Ingrediente
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
     * @return Ingrediente
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
     * @return Ingrediente
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
     * @return Ingrediente
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
}
