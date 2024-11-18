<?php

namespace App\Entity;

use App\Repository\EmpruntRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmpruntRepository::class)]
class Emprunt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $livre = null;


    #[ORM\Column(length: 50)]
    private ?string $Utilisateur = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateemprunt = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateRetour = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLivre(): ?string
    {
        return $this->livre;
    }

    public function setLivre(string $livre): static
    {
        $this->livre = $livre;

        return $this;
    }


    public function getUtilisateur(): ?string
    {
        return $this->Utilisateur;
    }

    public function setUtilisateur(string $Utilisateur): static
    {
        $this->Utilisateur = $Utilisateur;

        return $this;
    }

    public function getDateemprunt(): ?\DateTimeInterface
    {
        return $this->dateemprunt;
    }

    public function setDateemprunt(\DateTimeInterface $dateemprunt): static
    {
        $this->dateemprunt = $dateemprunt;

        return $this;
    }

    public function getDateRetour(): ?\DateTimeInterface
    {
        return $this->dateRetour;
    }

    public function setDateRetour(\DateTimeInterface $dateRetour): static
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }
}
