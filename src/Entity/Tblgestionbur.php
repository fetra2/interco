<?php

namespace App\Entity;

use App\Repository\TblgestionburRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TblgestionburRepository::class)
 */
class Tblgestionbur
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $idgestion;

    /**
     * @ORM\Column(type="integer")
     */
    private $ncodique;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datedebgest;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datefingest;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nomrec;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $reservenum;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $valpost;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $timbrefisc;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $soldedebdepart;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $soldecreddepart;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $coupure;

    public function getIdgestion(): ?int
    {
        return $this->idgestion;
    }

    public function setIdgestion(int $idgestion): self
    {
        $this->idgestion = $idgestion;

        return $this;
    }

    public function getNcodique(): ?int
    {
        return $this->ncodique;
    }

    public function setNcodique(int $ncodique): self
    {
        $this->ncodique = $ncodique;

        return $this;
    }

    public function getDatedebgest(): ?\DateTimeInterface
    {
        return $this->datedebgest;
    }

    public function setDatedebgest(\DateTimeInterface $datedebgest): self
    {
        $this->datedebgest = $datedebgest;

        return $this;
    }

    public function getDatefingest(): ?\DateTimeInterface
    {
        return $this->datefingest;
    }

    public function setDatefingest(\DateTimeInterface $datefingest): self
    {
        $this->datefingest = $datefingest;

        return $this;
    }

    public function getNomrec(): ?string
    {
        return $this->nomrec;
    }

    public function setNomrec(string $nomrec): self
    {
        $this->nomrec = $nomrec;

        return $this;
    }

    public function getReservenum(): ?float
    {
        return $this->reservenum;
    }

    public function setReservenum(?float $reservenum): self
    {
        $this->reservenum = $reservenum;

        return $this;
    }

    public function getValpost(): ?float
    {
        return $this->valpost;
    }

    public function setValpost(?float $valpost): self
    {
        $this->valpost = $valpost;

        return $this;
    }

    public function getTimbrefisc(): ?float
    {
        return $this->timbrefisc;
    }

    public function setTimbrefisc(?float $timbrefisc): self
    {
        $this->timbrefisc = $timbrefisc;

        return $this;
    }

    public function getSoldedebdepart(): ?float
    {
        return $this->soldedebdepart;
    }

    public function setSoldedebdepart(?float $soldedebdepart): self
    {
        $this->soldedebdepart = $soldedebdepart;

        return $this;
    }

    public function getSoldecreddepart(): ?float
    {
        return $this->soldecreddepart;
    }

    public function setSoldecreddepart(?float $soldecreddepart): self
    {
        $this->soldecreddepart = $soldecreddepart;

        return $this;
    }

    public function getCoupure(): ?int
    {
        return $this->coupure;
    }

    public function setCoupure(?int $coupure): self
    {
        $this->coupure = $coupure;

        return $this;
    }
}
