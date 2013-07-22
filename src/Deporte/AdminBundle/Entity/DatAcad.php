<?php

namespace Deporte\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * DatAcad
 *
 * @ORM\Table(name="dat_acad")
 * @ORM\Entity(repositoryClass="Deporte\AdminBundle\Entity\DatAcadRepository")
 * 
 */
class DatAcad
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
     * @Assert\NotNull()
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="aingreso", type="string", length=4, nullable=false)
     * @Assert\NotNull()
     * @Assert\MaxLength(4)
     */
    private $aingreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="escuela", type="integer", nullable=false)
     * @Assert\NotNull()
     */
    private $escuela;

    /**
     * @var integer
     *
     * @ORM\Column(name="especialidad", type="integer", nullable=false)
     * 
     */
    private $especialidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="semestre", type="smallint", nullable=false)
     * 
     */
    private $semestre;



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
     * @return DatAcad
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
     * Set aingreso
     *
     * @param string $aingreso
     * @return DatAcad
     */
    public function setAingreso($aingreso)
    {
        $this->aingreso = $aingreso;
    
        return $this;
    }

    /**
     * Get aingreso
     *
     * @return string 
     */
    public function getAingreso()
    {
        return $this->aingreso;
    }

    /**
     * Set escuela
     *
     * @param integer $escuela
     * @return DatAcad
     */
    public function setEscuela($escuela)
    {
        $this->escuela = $escuela;
    
        return $this;
    }

    /**
     * Get escuela
     *
     * @return integer 
     */
    public function getEscuela()
    {
        return $this->escuela;
    }

    /**
     * Set especialidad
     *
     * @param integer $especialidad
     * @return DatAcad
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;
    
        return $this;
    }

    /**
     * Get especialidad
     *
     * @return integer 
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * Set semestre
     *
     * @param integer $semestre
     * @return DatAcad
     */
    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;
    
        return $this;
    }

    /**
     * Get semestre
     *
     * @return integer 
     */
    public function getSemestre()
    {
        return $this->semestre;
    }
}
