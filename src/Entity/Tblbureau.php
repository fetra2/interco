<?php

namespace App\Entity;

use App\Repository\TblbureauRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TblbureauRepository::class)
 */
class Tblbureau
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $ncodique;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nfaritany;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $codeclasse;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nombureau;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $classe;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $ccp;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ncf;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cf_codik;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $sigle;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numavantsigle;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email3;

    public function getNcodique(): ?int
    {
        return $this->ncodique;
    }

    public function getNfaritany(): ?int
    {
        return $this->nfaritany;
    }

    public function setNfaritany(?int $nfaritany): self
    {
        $this->nfaritany = $nfaritany;

        return $this;
    }

    public function getCodeclasse(): ?int
    {
        return $this->codeclasse;
    }

    public function setCodeclasse(?int $codeclasse): self
    {
        $this->codeclasse = $codeclasse;

        return $this;
    }

    public function getNombureau(): ?string
    {
        return $this->nombureau;
    }

    public function setNombureau(?string $nombureau): self
    {
        $this->nombureau = $nombureau;

        return $this;
    }

    public function getClasse(): ?string
    {
        return $this->classe;
    }

    public function setClasse(?string $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    public function getCcp(): ?string
    {
        return $this->ccp;
    }

    public function setCcp(?string $ccp): self
    {
        $this->ccp = $ccp;

        return $this;
    }

    public function getNcf(): ?int
    {
        return $this->ncf;
    }

    public function setNcf(?int $ncf): self
    {
        $this->ncf = $ncf;

        return $this;
    }

    public function getCfCodik(): ?int
    {
        return $this->cf_codik;
    }

    public function setCfCodik(?int $cf_codik): self
    {
        $this->cf_codik = $cf_codik;

        return $this;
    }

    public function getSigle(): ?string
    {
        return $this->sigle;
    }

    public function setSigle(?string $sigle): self
    {
        $this->sigle = $sigle;

        return $this;
    }

    public function getNumavantsigle(): ?int
    {
        return $this->numavantsigle;
    }

    public function setNumavantsigle(?int $numavantsigle): self
    {
        $this->numavantsigle = $numavantsigle;

        return $this;
    }

    public function getNbur(): ?int
    {
        return $this->nbur;
    }

    public function setNbur(int $nbur): self
    {
        $this->nbur = $nbur;

        return $this;
    }

    public function getEmail1(): ?string
    {
        return $this->email1;
    }

    public function setEmail1(?string $email1): self
    {
        $this->email1 = $email1;

        return $this;
    }

    public function getEmail2(): ?string
    {
        return $this->email2;
    }

    public function setEmail2(?string $email2): self
    {
        $this->email2 = $email2;

        return $this;
    }

    public function getEmail3(): ?string
    {
        return $this->email3;
    }

    public function setEmail3(?string $email3): self
    {
        $this->email3 = $email3;

        return $this;
    }
}
