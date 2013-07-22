<?php

namespace Deporte\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoDeporte
 *
 * @ORM\Table(name="tipo_deporte")
 * @ORM\Entity(repositoryClass="Deporte\AdminBundle\Entity\TipoDeporteRepository")
 */
class TipoDeporte
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
     * @ORM\Column(name="deporte", type="string", length=200, nullable=false)
     */
    private $deporte;



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
     * Set deporte
     *
     * @param string $deporte
     * @return TipoDeporte
     */
    public function setDeporte($deporte)
    {
        $this->deporte = $deporte;
    
        return $this;
    }

    /**
     * Get deporte
     *
     * @return string 
     */
    public function getDeporte()
    {
        return $this->deporte;
    }
}
