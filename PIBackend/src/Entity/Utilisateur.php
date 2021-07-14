<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;



 /**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 */

class Utilisateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $idUtilisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $motdepasse;

    /**
     * @ORM\Column(type="integer")
     */
    private $lattitude;

    /**
     * @ORM\Column(type="integer")
     */
    private $longitude;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $attribute;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeUtilisateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUtilisateur(): ?string
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(string $idUtilisateur): self
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    public function getMotdepasse(): ?string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(string $motdepasse): self
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    public function getLattitude(): ?int
    {
        return $this->lattitude;
    }

    public function setLattitude(int $lattitude): self
    {
        $this->lattitude = $lattitude;

        return $this;
    }

    public function getLongitude(): ?int
    {
        return $this->longitude;
    }

    public function setLongitude(int $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getAttribute(): ?string
    {
        return $this->attribute;
    }

    public function setAttribute(string $attribute): self
    {
        $this->attribute = $attribute;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTypeUtilisateur(): ?string
    {
        return $this->typeUtilisateur;
    }

    public function setTypeUtilisateur(string $typeUtilisateur): self
    {
        $this->typeUtilisateur = $typeUtilisateur;

        return $this;
    }
}
