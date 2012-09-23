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
     * @var string $desc
     *
     * @ORM\Column(name="desc", type="string", length=255)
     */
    private $desc;

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
     * Set desc
     *
     * @param string $desc
     * @return Unidad
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    
        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDesc()
    {
        return $this->desc;
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
