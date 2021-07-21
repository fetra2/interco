<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TbluserRepository;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=TbluserRepository::class)
 * @ORM\Table(name="`TblUser`")
 */
class Tbluser implements UserInterface
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

     /**
     * @see UserInterface
     */
    private $roles = [];

    /**
     * @see UserInterface
     */
    private $password ;

    /**
     * @see UserInterface
     */
    private $username;

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function getUsername(): ?string
    {
        return $this->nomuser;
    }

    public function setUsername(?string $nomuser): self
    {
        $this->nomuser = $nomuser;
        $this->username = $nomuser;
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

    public function getPassword(): ?string
    {
        return $this->passuser;
    }

    public function setPassword(?string $passuser): self
    {
        $this->passuser = $passuser;
        $this->password = $passuser;
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

    public function getRoles(): array
    {
        //$roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        //$roles[] = 'ROLE_USER';
        //$roles=$this->fonctionuser;
        $roles[] = $this->fonctionuser;
        return array_unique($roles);
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return "paositra";
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
