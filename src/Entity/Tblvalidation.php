<?php

namespace App\Entity;

use App\Repository\TblvalidationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TblvalidationRepository::class)
 */
class Tblvalidation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idval;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $codique;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idgest;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $iduser;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateval;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $status;


    public function getIdval(): ?int
    {
        return $this->idval;
    }


    public function getCodique(): ?int
    {
        return $this->codique;
    }

    public function setCodique(?int $codique): self
    {
        $this->codique = $codique;

        return $this;
    }

    public function getIdgest(): ?int
    {
        return $this->idgest;
    }

    public function setIdgest(?int $idgest): self
    {
        $this->idgest = $idgest;

        return $this;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(?int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getDateval(): ?\DateTimeInterface
    {
        return $this->dateval;
    }

    public function setDateval(?\DateTimeInterface $dateval): self
    {
        $this->dateval = $dateval;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }
}
