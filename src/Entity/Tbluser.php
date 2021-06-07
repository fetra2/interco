<?php

namespace App\Entity;

use App\Repository\TbluserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TbluserRepository::class)
 */
class Tbluser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $iduser;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nomuser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $accesuser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fonctionuser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $passuser;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $codique;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $compte;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $connect;

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function getNomuser(): ?string
    {
        return $this->nomuser;
    }

    public function setNomuser(?string $nomuser): self
    {
        $this->nomuser = $nomuser;

        return $this;
    }

    public function getAccesuser(): ?string
    {
        return $this->accesuser;
    }

    public function setAccesuser(?string $accesuser): self
    {
        $this->accesuser = $accesuser;

        return $this;
    }

    public function getFonctionuser(): ?string
    {
        return $this->fonctionuser;
    }

    public function setFonctionuser(?string $fonctionuser): self
    {
        $this->fonctionuser = $fonctionuser;

        return $this;
    }

    public function getPassuser(): ?string
    {
        return $this->passuser;
    }

    public function setPassuser(?string $passuser): self
    {
        $this->passuser = $passuser;

        return $this;
    }

    public function getCodique(): ?string
    {
        return $this->codique;
    }

    public function setCodique(?string $codique): self
    {
        $this->codique = $codique;

        return $this;
    }

    public function getCompte(): ?string
    {
        return $this->compte;
    }

    public function setCompte(?string $compte): self
    {
        $this->compte = $compte;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getConnect(): ?int
    {
        return $this->connect;
    }

    public function setConnect(?int $connect): self
    {
        $this->connect = $connect;

        return $this;
    }
}
