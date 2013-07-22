<?php

namespace Deporte\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatDepmodmar Deportista Modalidad Marca
 * 
 *
 * @ORM\Table(name="dat_depmodmar")
 * @ORM\Entity(repositoryClass="Deporte\AdminBundle\Entity\DatDepmodmarRepository")
 */
class DatDepmodmar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=9, nullable=false)
     */
    private $cedula;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmoda", type="integer", nullable=false)
     */
    private $idmoda;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=40, nullable=false)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha", type="string", length=10, nullable=false)
     */
    private $fecha;



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
     * Set cedula
     *
     * @param string $cedula
     * @return DatDepmodmar
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    
        return $this;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set idmoda
     *
     * @param integer $idmoda
     * @return DatDepmodmar
     */
    public function setIdmoda($idmoda)
    {
        $this->idmoda = $idmoda;
    
        return $this;
    }

    /**
     * Get idmoda
     *
     * @return integer 
     */
    public function getIdmoda()
    {
        return $this->idmoda;
    }

    /**
     * Set marca
     *
     * @param string $marca
     * @return DatDepmodmar
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    
        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set fecha
     *
     * @param string $fecha
     * @return DatDepmodmar
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return string 
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}
