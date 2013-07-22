<?php

namespace Deporte\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="Deporte\AdminBundle\Entity\UsuarioRepository")
 */
class Usuario
{
    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=32, nullable=false)
     */
    private $pass;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=32, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nivel", type="string", length=4, nullable=false)
     */
    private $nivel;



    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set pass
     *
     * @param string $pass
     * @return Usuario
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    
        return $this;
    }

    /**
     * Get pass
     *
     * @return string 
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nivel
     *
     * @param string $nivel
     * @return Usuario
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    
        return $this;
    }

    /**
     * Get nivel
     *
     * @return string 
     */
    public function getNivel()
    {
        return $this->nivel;
    }
}
