<?php

namespace Gicsdr\ArmatucanastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gicsdr\ArmatucanastaBundle\Entity\Plato
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Plato
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
     * @var integer $id_cocina
     *
     * @ORM\Column(name="id_cocina", type="integer")
     */
    private $id_cocina;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var integer $num_personas
     *
     * @ORM\Column(name="num_personas", type="integer")
     */
    private $num_personas;

    /**
     * @var string $preparacion
     *
     * @ORM\Column(name="preparacion", type="text")
     */
    private $preparacion;

    /**
     * @var string $img_path
     *
     * @ORM\Column(name="img_path", type="string", length=255)
     */
    private $img_path;


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
     * Set id_cocina
     *
     * @param integer $idCocina
     * @return Plato
     */
    public function setIdCocina($idCocina)
    {
        $this->id_cocina = $idCocina;
    
        return $this;
    }

    /**
     * Get id_cocina
     *
     * @return integer 
     */
    public function getIdCocina()
    {
        return $this->id_cocina;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Plato
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Plato
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
     * Set num_personas
     *
     * @param integer $numPersonas
     * @return Plato
     */
    public function setNumPersonas($numPersonas)
    {
        $this->num_personas = $numPersonas;
    
        return $this;
    }

    /**
     * Get num_personas
     *
     * @return integer 
     */
    public function getNumPersonas()
    {
        return $this->num_personas;
    }

    /**
     * Set preparacion
     *
     * @param string $preparacion
     * @return Plato
     */
    public function setPreparacion($preparacion)
    {
        $this->preparacion = $preparacion;
    
        return $this;
    }

    /**
     * Get preparacion
     *
     * @return string 
     */
    public function getPreparacion()
    {
        return $this->preparacion;
    }

    /**
     * Set img_path
     *
     * @param string $imgPath
     * @return Plato
     */
    public function setImgPath($imgPath)
    {
        $this->img_path = $imgPath;
    
        return $this;
    }

    /**
     * Get img_path
     *
     * @return string 
     */
    public function getImgPath()
    {
        return $this->img_path;
    }
}
