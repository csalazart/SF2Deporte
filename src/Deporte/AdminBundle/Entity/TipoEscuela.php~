<?php

namespace Deporte\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoEscuela
 *
 * @ORM\Table(name="tipo_escuela")
 * @ORM\Entity(repositoryClass="Deporte\AdminBundle\Entity\TipoEscuelaRepository")
 */
class TipoEscuela
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
     * @ORM\Column(name="escuela", type="string", length=250, nullable=false)
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
     * Set escuela
     *
     * @param string $escuela
     * @return TipoEscuela
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
