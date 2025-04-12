<?php

namespace App\Entity;

use App\Repository\DemandePackRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandePackRepository::class)]
#[ORM\Table(name: "demande_pack")]
class DemandePack
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(
        type: "string", 
        columnDefinition: "ENUM('EN_ATTENTE', 'EN_PERSONNALISATION', 'EN_ATTENTE_PAIEMENT', 'CONFIRME', 'ANNULE')", 
        options: ["default" => "EN_ATTENTE"]
    )]
    private string $statut = 'EN_ATTENTE';

    #[ORM\Column(type: "float")]
    private float $prix;

    #[ORM\ManyToOne(targetEntity: Pack::class)]
    #[ORM\JoinColumn(name: "pack_id", referencedColumnName: "id", nullable: false)]
    private Pack $pack;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class)]
    #[ORM\JoinColumn(name: "utilisateur_id", referencedColumnName: "id", nullable: false)]
    private ?Utilisateur $utilisateur = null;

    #[ORM\Column(name: "utilisateur_id")]
    private int $utilisateurId;

    #[ORM\ManyToOne(targetEntity: Event::class)]
    #[ORM\JoinColumn(name: "event_id", referencedColumnName: "id")]
    private ?Event $event = null;

    #[ORM\Column(
        type: "datetime", 
        name: "date_demande", 
        options: ["default" => "CURRENT_TIMESTAMP"]
    )]
    private \DateTimeInterface $dateDemande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatut(): string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;
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

    public function getUtilisateurId(): int
    {
        return $this->utilisateurId;
    }

    public function setUtilisateurId(int $utilisateurId): self
    {
        $this->utilisateurId = $utilisateurId;
        return $this;
    }

    public function getPack(): Pack
    {
        return $this->pack;
    }

    public function setPack(Pack $pack): self
    {
        $this->pack = $pack;
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

    public function getDateDemande(): \DateTimeInterface
    {
        return $this->dateDemande;
    }

    public function setDateDemande(\DateTimeInterface $dateDemande): self
    {
        $this->dateDemande = $dateDemande;
        return $this;
    }
}