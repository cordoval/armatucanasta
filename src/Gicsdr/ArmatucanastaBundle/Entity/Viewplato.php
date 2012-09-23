<?php

namespace Gicsdr\ArmatucanastaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gicsdr\ArmatucanastaBundle\Entity\Viewplato
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Viewplato
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
     * @var string $cocina_descripcion
     *
     * @ORM\Column(name="cocina_descripcion", type="string", length=255)
     */
    private $cocina_descripcion;


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
     * @return Viewplato
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
     * @return Viewplato
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
     * @return Viewplato
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
     * @return Viewplato
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
     * @return Viewplato
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
     * @return Viewplato
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

    /**
     * Set cocina_descripcion
     *
     * @param string $cocinaDescripcion
     * @return Viewplato
     */
    public function setCocinaDescripcion($cocinaDescripcion)
    {
        $this->cocina_descripcion = $cocinaDescripcion;
    
        return $this;
    }

    /**
     * Get cocina_descripcion
     *
     * @return string 
     */
    public function getCocinaDescripcion()
    {
        return $this->cocina_descripcion;
    }
}
