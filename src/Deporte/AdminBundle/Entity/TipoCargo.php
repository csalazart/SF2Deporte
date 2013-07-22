<?php

namespace Deporte\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoCargo
 *
 * @ORM\Table(name="tipo_cargo")
 * @ORM\Entity(repositoryClass="Deporte\AdminBundle\Entity\TipoCargoRepository")
 */
class TipoCargo
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
     * @ORM\Column(name="cargo", type="string", length=150, nullable=false)
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
     * Set cargo
     *
     * @param string $cargo
     * @return TipoCargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    
        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }
}
