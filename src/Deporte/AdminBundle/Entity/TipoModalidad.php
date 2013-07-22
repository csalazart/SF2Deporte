<?php

namespace Deporte\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoModalidad
 *
 * @ORM\Table(name="tipo_modalidad")
 * @ORM\Entity(repositoryClass="Deporte\AdminBundle\Entity\TipoModalidadRepository")
 */
class TipoModalidad
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
     * @var integer
     *
     * @ORM\Column(name="iddeporte", type="integer", nullable=false)
     */
    private $iddeporte;

    /**
     * @var string
     *
     * @ORM\Column(name="modalidad", type="string", length=200, nullable=false)
     */
    private $modalidad;



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
     * Set iddeporte
     *
     * @param integer $iddeporte
     * @return TipoModalidad
     */
    public function setIddeporte($iddeporte)
    {
        $this->iddeporte = $iddeporte;
    
        return $this;
    }

    /**
     * Get iddeporte
     *
     * @return integer 
     */
    public function getIddeporte()
    {
        return $this->iddeporte;
    }

    /**
     * Set modalidad
     *
     * @param string $modalidad
     * @return TipoModalidad
     */
    public function setModalidad($modalidad)
    {
        $this->modalidad = $modalidad;
    
        return $this;
    }

    /**
     * Get modalidad
     *
     * @return string 
     */
    public function getModalidad()
    {
        return $this->modalidad;
    }
}
