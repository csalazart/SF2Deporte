<?php

namespace Deporte\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoSeleccion
 *
 * @ORM\Table(name="tipo_seleccion")
 * @ORM\Entity(repositoryClass="Deporte\AdminBundle\Entity\TipoSeleccionRepository")
 */
class TipoSeleccion
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
     * @ORM\Column(name="seleccion", type="string", length=16, nullable=false)
     */
    private $seleccion;



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
     * Set seleccion
     *
     * @param string $seleccion
     * @return TipoSeleccion
     */
    public function setSeleccion($seleccion)
    {
        $this->seleccion = $seleccion;
    
        return $this;
    }

    /**
     * Get seleccion
     *
     * @return string 
     */
    public function getSeleccion()
    {
        return $this->seleccion;
    }
}
