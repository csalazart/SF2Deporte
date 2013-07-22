<?php

namespace Deporte\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DatMed
 *
 * @ORM\Table(name="dat_med")
 * @ORM\Entity(repositoryClass="Deporte\AdminBundle\Entity\DatMedRepository")
 */
class DatMed
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
     * @var string
     *
     * @ORM\Column(name="seleccion", type="string", length=2, nullable=false)
     */
    private $seleccion;

    /**
     * @var string
     *
     * @ORM\Column(name="llamar_a", type="string", length=32, nullable=false)
     */
    private $llamarA;

    /**
     * @var string
     *
     * @ORM\Column(name="tlf_emergencia", type="string", length=16, nullable=false)
     */
    private $tlfEmergencia;

    /**
     * @var string
     *
     * @ORM\Column(name="tlf_emergencia2", type="string", length=16, nullable=false)
     */
    private $tlfEmergencia2;

    /**
     * @var string
     *
     * @ORM\Column(name="grupo_sangre", type="string", length=4, nullable=false)
     */
    private $grupoSangre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alergico", type="boolean", nullable=true)
     */
    private $alergico;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_alergia", type="string", length=1000, nullable=true)
     */
    private $tipoAlergia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="antecedentes_med", type="boolean", nullable=true)
     */
    private $antecedentesMed;

    /**
     * @var string
     *
     * @ORM\Column(name="tipos_antecedentes", type="string", length=1000, nullable=true)
     */
    private $tiposAntecedentes;



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
     * @return DatMed
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
     * Set seleccion
     *
     * @param string $seleccion
     * @return DatMed
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

    /**
     * Set llamarA
     *
     * @param string $llamarA
     * @return DatMed
     */
    public function setLlamarA($llamarA)
    {
        $this->llamarA = $llamarA;
    
        return $this;
    }

    /**
     * Get llamarA
     *
     * @return string 
     */
    public function getLlamarA()
    {
        return $this->llamarA;
    }

    /**
     * Set tlfEmergencia
     *
     * @param string $tlfEmergencia
     * @return DatMed
     */
    public function setTlfEmergencia($tlfEmergencia)
    {
        $this->tlfEmergencia = $tlfEmergencia;
    
        return $this;
    }

    /**
     * Get tlfEmergencia
     *
     * @return string 
     */
    public function getTlfEmergencia()
    {
        return $this->tlfEmergencia;
    }

    /**
     * Set tlfEmergencia2
     *
     * @param string $tlfEmergencia2
     * @return DatMed
     */
    public function setTlfEmergencia2($tlfEmergencia2)
    {
        $this->tlfEmergencia2 = $tlfEmergencia2;
    
        return $this;
    }

    /**
     * Get tlfEmergencia2
     *
     * @return string 
     */
    public function getTlfEmergencia2()
    {
        return $this->tlfEmergencia2;
    }

    /**
     * Set grupoSangre
     *
     * @param string $grupoSangre
     * @return DatMed
     */
    public function setGrupoSangre($grupoSangre)
    {
        $this->grupoSangre = $grupoSangre;
    
        return $this;
    }

    /**
     * Get grupoSangre
     *
     * @return string 
     */
    public function getGrupoSangre()
    {
        return $this->grupoSangre;
    }

    /**
     * Set alergico
     *
     * @param boolean $alergico
     * @return DatMed
     */
    public function setAlergico($alergico)
    {
        $this->alergico = $alergico;
    
        return $this;
    }

    /**
     * Get alergico
     *
     * @return boolean 
     */
    public function getAlergico()
    {
        return $this->alergico;
    }

    /**
     * Set tipoAlergia
     *
     * @param string $tipoAlergia
     * @return DatMed
     */
    public function setTipoAlergia($tipoAlergia)
    {
        $this->tipoAlergia = $tipoAlergia;
    
        return $this;
    }

    /**
     * Get tipoAlergia
     *
     * @return string 
     */
    public function getTipoAlergia()
    {
        return $this->tipoAlergia;
    }

    /**
     * Set antecedentesMed
     *
     * @param boolean $antecedentesMed
     * @return DatMed
     */
    public function setAntecedentesMed($antecedentesMed)
    {
        $this->antecedentesMed = $antecedentesMed;
    
        return $this;
    }

    /**
     * Get antecedentesMed
     *
     * @return boolean 
     */
    public function getAntecedentesMed()
    {
        return $this->antecedentesMed;
    }

    /**
     * Set tiposAntecedentes
     *
     * @param string $tiposAntecedentes
     * @return DatMed
     */
    public function setTiposAntecedentes($tiposAntecedentes)
    {
        $this->tiposAntecedentes = $tiposAntecedentes;
    
        return $this;
    }

    /**
     * Get tiposAntecedentes
     *
     * @return string 
     */
    public function getTiposAntecedentes()
    {
        return $this->tiposAntecedentes;
    }
}
