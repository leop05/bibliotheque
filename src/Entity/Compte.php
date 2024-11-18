<?php

namespace App\Entity;

use App\Repository\CompteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompteRepository::class)]
class Compte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $emprunt = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 50)]
    private ?string $livre_emprunt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmprunt(): ?string
    {
        return $this->emprunt;
    }

    public function setEmprunt(string $emprunt): static
    {
        $this->emprunt = $emprunt;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getLivreEmprunt(): ?string
    {
        return $this->livre_emprunt;
    }

    public function setLivreEmprunt(string $livre_emprunt): static
    {
        $this->livre_emprunt = $livre_emprunt;

        return $this;
    }
}
