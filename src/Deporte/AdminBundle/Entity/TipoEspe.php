<?php

namespace Deporte\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoEspe
 *
 * @ORM\Table(name="tipo_espe")
 * @ORM\Entity(repositoryClass="Deporte\AdminBundle\Entity\TipoEspeRepository")
 */
class TipoEspe
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
     * @ORM\Column(name="especialidad", type="string", length=300, nullable=false)
     */
    private $especialidad;

    /**
     * @var string
     *
     * @ORM\Column(name="escuela", type="string", length=4, nullable=false)
     */
    private $escuela;



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
     * Set especialidad
     *
     * @param string $especialidad
     * @return TipoEspe
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;
    
        return $this;
    }

    /**
     * Get especialidad
     *
     * @return string 
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * Set escuela
     *
     * @param string $escuela
     * @return TipoEspe
     */
    public function setEscuela($escuela)
    {
        $this->escuela = $escuela;
    
        return $this;
    }

    /**
     * Get escuela
     *
     * @return string 
     */
    public function getEscuela()
    {
        return $this->escuela;
    }
}
