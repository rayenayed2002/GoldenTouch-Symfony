<?php

namespace App\Entity;

use App\Repository\ReservMatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservMatRepository::class)]
#[ORM\Table(name: 'reserve_mat')]  // Explicitly define the table name
class ReservMat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_reserv = null;

    #[ORM\ManyToOne(targetEntity: Materielle::class)]
#[ORM\JoinColumn(name: "id_mat", referencedColumnName: "id_mat", nullable: false)]
private ?Materielle $materielle = null;

#[ORM\Column(name: 'statut', type: 'string', length: 255)]
private string $statut = 'non confirmé';
    

#[ORM\ManyToOne(targetEntity: Event::class)]
#[ORM\JoinColumn(name: "id_event", referencedColumnName: "id", nullable: false)]
private ?Event $event = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class)]
    #[ORM\JoinColumn(name: "IdUser", referencedColumnName: "id", nullable: false)]
    private ?Utilisateur $utilisateur = null;

    public function getStatut(): string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }
    public function getIdReserv(): ?int
    {
        return $this->id_reserv;
    }

    public function setIdReserv(int $id_reserv): self
    {
        $this->id_reserv = $id_reserv;
        return $this;
    }
    public function getMaterielle(): ?Materielle
    {
        return $this->materielle;
    }
    
    public function setMaterielle(?Materielle $materielle): self
    {
        $this->materielle = $materielle;
        return $this;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;
        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;
        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
{
    return $this->utilisateur;
}

public function setUtilisateur(?Utilisateur $utilisateur): self
{
    $this->utilisateur = $utilisateur;
    return $this;
}

    public function __toString(): string
    {
        return sprintf("Réservation %d - Quantité: %d", $this->id_reserv, $this->quantite);
    }
}