<?php

namespace Deporte\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatParticipa
 *
 * @ORM\Table(name="dat_participa")
 * @ORM\Entity(repositoryClass="Deporte\AdminBundle\Entity\DatParticipaRepository")
 */
class DatParticipa
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
     * @ORM\Column(name="cargo", type="integer", nullable=false)
     */
    private $cargo;



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
     * @return DatParticipa
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
     * Set cargo
     *
     * @param integer $cargo
     * @return DatParticipa
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    
        return $this;
    }

    /**
     * Get cargo
     *
     * @return integer 
     */
    public function getCargo()
    {
        return $this->cargo;
    }
}
