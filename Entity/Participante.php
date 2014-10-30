<?php

// src/GanemosMadrid/PlenarioFormBundle/Entity/Participante.php

namespace GanemosMadridPlenarioFormBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="participantes")
 * @ORM\Entity(repositoryClass="GanemosMadridPlenarioFormBundle\Entity\ParticipanteRepository")
 * @UniqueEntity("email")
 */
class Participante
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nombre;

    /**
     * @ORM\Column(type="string", nullable=TRUE, unique=true)
     * @Assert\Email()
     */
    protected $email;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $primeraVez;

    /**
     * @ORM\Column(type="integer")
     */
    protected $listaInformacion;

    /**
     * @ORM\Column(type="array")
     */
    protected $gruposTrabajo;

    /**
     * @ORM\Column(type="text", length=5, nullable=TRUE)
     */
    protected $codigoPostal;

    /**
     * @ORM\Column(type="text")
     */
    protected $distrito;

    /**
     * @ORM\Column(type="boolean", nullable=TRUE)
     */
    protected $presentacion;

    /**
     * @ORM\Column(type="text", nullable=TRUE)
     */
    protected $colectivosBarrio;

    /**
     * @ORM\Column(type="text", nullable=TRUE)
     */
    protected $invitados;

    /**
     * @ORM\Column(type="array")
     */
    protected $sectorialEmpleo;

    /**
     * @ORM\Column(type="array")
     */
    protected $sectorialDerechos;

    /**
     * @ORM\Column(type="array")
     */
    protected $sectorialGobierno;

    /**
     * @ORM\Column(type="array")
     */
    protected $sectorialCiudad;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Participante
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set primeraVez
     *
     * @param boolean $primeraVez
     * @return Participante
     */
    public function setPrimeraVez($primeraVez)
    {
        $this->primeraVez = $primeraVez;

        return $this;
    }

    /**
     * Get primeraVez
     *
     * @return boolean 
     */
    public function getPrimeraVez()
    {
        return $this->primeraVez;
    }

    /**
     * Set listaInformacion
     *
     * @param boolean $listaInformacion
     * @return Participante
     */
    public function setListaInformacion($listaInformacion)
    {
        $this->listaInformacion = $listaInformacion;

        return $this;
    }

    /**
     * Get listaInformacion
     *
     * @return boolean 
     */
    public function getListaInformacion()
    {
        return $this->listaInformacion;
    }

    /**
     * Set gruposTrabajo
     *
     * @param string $gruposTrabajo
     * @return Participante
     */
    public function setGruposTrabajo($gruposTrabajo)
    {
        $this->gruposTrabajo = $gruposTrabajo;

        return $this;
    }

    /**
     * Get gruposTrabajo
     *
     * @return string 
     */
    public function getGruposTrabajo()
    {
        return $this->gruposTrabajo;
    }

    /**
     * Set codigoPostal
     *
     * @param integer $codigoPostal
     * @return Participante
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return integer 
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Participante
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
     * Set colectivosBarrio
     *
     * @param string $colectivosBarrio
     * @return Participante
     */
    public function setColectivosBarrio($colectivosBarrio)
    {
        $this->colectivosBarrio = $colectivosBarrio;

        return $this;
    }

    /**
     * Get colectivosBarrio
     *
     * @return string 
     */
    public function getColectivosBarrio()
    {
        return $this->colectivosBarrio;
    }

    /**
     * Set invitados
     *
     * @param string $invitados
     * @return Participante
     */
    public function setInvitados($invitados)
    {
        $this->invitados = $invitados;

        return $this;
    }

    /**
     * Get invitados
     *
     * @return string 
     */
    public function getInvitados()
    {
        return $this->invitados;
    }

    /**
     * Set sectorialEmpleo
     *
     * @param array $sectorialEmpleo
     * @return Participante
     */
    public function setSectorialEmpleo($sectorialEmpleo)
    {
        $this->sectorialEmpleo = $sectorialEmpleo;

        return $this;
    }

    /**
     * Get sectorialEmpleo
     *
     * @return array 
     */
    public function getSectorialEmpleo()
    {
        return $this->sectorialEmpleo;
    }

    /**
     * Set sectorialDerechos
     *
     * @param array $sectorialDerechos
     * @return Participante
     */
    public function setSectorialDerechos($sectorialDerechos)
    {
        $this->sectorialDerechos = $sectorialDerechos;

        return $this;
    }

    /**
     * Get sectorialDerechos
     *
     * @return array 
     */
    public function getSectorialDerechos()
    {
        return $this->sectorialDerechos;
    }

    /**
     * Set sectorialGobierno
     *
     * @param array $sectorialGobierno
     * @return Participante
     */
    public function setSectorialGobierno($sectorialGobierno)
    {
        $this->sectorialGobierno = $sectorialGobierno;

        return $this;
    }

    /**
     * Get sectorialGobierno
     *
     * @return array 
     */
    public function getSectorialGobierno()
    {
        return $this->sectorialGobierno;
    }

    /**
     * Set sectorialCiudad
     *
     * @param array $sectorialCiudad
     * @return Participante
     */
    public function setSectorialCiudad($sectorialCiudad)
    {
        $this->sectorialCiudad = $sectorialCiudad;

        return $this;
    }

    /**
     * Get sectorialCiudad
     *
     * @return array 
     */
    public function getSectorialCiudad()
    {
        return $this->sectorialCiudad;
    }

    /**
     * Set distrito
     *
     * @param string $distrito
     * @return Participante
     */
    public function setDistrito($distrito)
    {
        $this->distrito = $distrito;

        return $this;
    }

    /**
     * Get distrito
     *
     * @return string 
     */
    public function getDistrito()
    {
        return $this->distrito;
    }

    /**
     * Set presentacion
     *
     * @param boolean $presentacion
     * @return Participante
     */
    public function setPresentacion($presentacion)
    {
        $this->presentacion = $presentacion;

        return $this;
    }

    /**
     * Get presentacion
     *
     * @return boolean 
     */
    public function getPresentacion()
    {
        return $this->presentacion;
    }
}
