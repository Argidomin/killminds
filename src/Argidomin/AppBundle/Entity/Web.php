<?php

namespace Argidomin\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations

use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Web
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Argidomin\AppBundle\Entity\WebRepository")
 * @UniqueEntity("nombreWeb")
 */
class Web
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreWeb", type="string", length=20)
     */
    private $nombreWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="slogan", type="string", length=100)
     */
    private $slogan;

    /**
     * @var string
     *
     * @ORM\Column(name="urlFacebook", type="string", length=150)
     * @Assert\Url(message = "la dirección no '{{ value }}' no es valida.")
     */
    private $urlFacebook;

    /**
     * @var string
     *
     * @ORM\Column(name="urlTwitter", type="string", length=150)
     * @Assert\Url(message = "la dirección no '{{ value }}' no es valida..")
     */
    private $urlTwitter;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean")
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="emailContacto", type="string", length=255)
     * @Assert\Email(message = "El email '{{ value }}' no es valido.")
     */
    private $emailContacto;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefonoContacto", type="integer")
     */
    private $telefonoContacto;

    /**
     * @var \DateTime
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="fechaCreacion", type="datetime")
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="fechaActualizado", type="datetime")
     */
    private $fechaActualizado;

    /**
     * @var string
     *
     * @ORM\Column(name="tagManager", type="text")
     */
    private $tagManager;

    public function __toString()
    {
        return $this->getNombreWeb();
    }


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
     * Set nombreWeb
     *
     * @param string $nombreWeb
     * @return Web
     */
    public function setNombreWeb($nombreWeb)
    {
        $this->nombreWeb = $nombreWeb;

        return $this;
    }

    /**
     * Get nombreWeb
     *
     * @return string 
     */
    public function getNombreWeb()
    {
        return $this->nombreWeb;
    }

    /**
     * Set slogan
     *
     * @param string $slogan
     * @return Web
     */
    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;

        return $this;
    }

    /**
     * Get slogan
     *
     * @return string 
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * Set urlFacebook
     *
     * @param string $urlFacebook
     * @return Web
     */
    public function setUrlFacebook($urlFacebook)
    {
        $this->urlFacebook = $urlFacebook;

        return $this;
    }

    /**
     * Get urlFacebook
     *
     * @return string 
     */
    public function getUrlFacebook()
    {
        return $this->urlFacebook;
    }

    /**
     * Set urlTwitter
     *
     * @param string $urlTwitter
     * @return Web
     */
    public function setUrlTwitter($urlTwitter)
    {
        $this->urlTwitter = $urlTwitter;

        return $this;
    }

    /**
     * Get urlTwitter
     *
     * @return string 
     */
    public function getUrlTwitter()
    {
        return $this->urlTwitter;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     * @return Web
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set emailContacto
     *
     * @param string $emailContacto
     * @return Web
     */
    public function setEmailContacto($emailContacto)
    {
        $this->emailContacto = $emailContacto;

        return $this;
    }

    /**
     * Get emailContacto
     *
     * @return string 
     */
    public function getEmailContacto()
    {
        return $this->emailContacto;
    }

    /**
     * Set telefonoContacto
     *
     * @param integer $telefonoContacto
     * @return Web
     */
    public function setTelefonoContacto($telefonoContacto)
    {
        $this->telefonoContacto = $telefonoContacto;

        return $this;
    }

    /**
     * Get telefonoContacto
     *
     * @return integer 
     */
    public function getTelefonoContacto()
    {
        return $this->telefonoContacto;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Web
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaActualizado
     *
     * @param \DateTime $fechaActualizado
     * @return Web
     */
    public function setFechaActualizado($fechaActualizado)
    {
        $this->fechaActualizado = $fechaActualizado;

        return $this;
    }

    /**
     * Get fechaActualizado
     *
     * @return \DateTime 
     */
    public function getFechaActualizado()
    {
        return $this->fechaActualizado;
    }

    /**
     * Set tagManager
     *
     * @param string $tagManager
     * @return Web
     */
    public function setTagManager($tagManager)
    {
        $this->tagManager = $tagManager;

        return $this;
    }

    /**
     * Get tagManager
     *
     * @return string 
     */
    public function getTagManager()
    {
        return $this->tagManager;
    }
}
