<?php

namespace App\Entity;

use App\Repository\TblrattachementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TblrattachementRepository::class)
 */
class Tblrattachement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $codique;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $dirpm;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDirpm(): ?string
    {
        return $this->dirpm;
    }

    public function setDirpm(string $dirpm): self
    {
        $this->dirpm = $dirpm;

        return $this;
    }
}
