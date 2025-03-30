<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\NotificationsAdminRepository;

#[ORM\Entity(repositoryClass: NotificationsAdminRepository::class)]
#[ORM\Table(name: 'notifications_admin')]
class NotificationsAdmin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'notificationsAdmins')]
    #[ORM\JoinColumn(name: 'admin_id', referencedColumnName: 'id')]
    private ?Utilisateur $admin = null;

    public function getAdmin(): ?Utilisateur
    {
        return $this->admin;
    }

    public function setAdmin(?Utilisateur $admin): static
    {
        $this->admin = $admin;

        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'notificationsAdmins')]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id')]
    private ?Utilisateur $utilisateur = null;

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    #[ORM\ManyToOne(targetEntity: DemandePack::class, inversedBy: 'notificationsAdmins')]
    #[ORM\JoinColumn(name: 'demande_pack_id', referencedColumnName: 'id')]
    private ?DemandePack $demandePack = null;

    public function getDemandePack(): ?DemandePack
    {
        return $this->demandePack;
    }

    public function setDemandePack(?DemandePack $demandePack): static
    {
        $this->demandePack = $demandePack;

        return $this;
    }

    #[ORM\Column(type: 'text', nullable: false)]
    private ?string $message = null;

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $statut = null;

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    #[ORM\Column(type: 'datetime', nullable: false)]
    private ?\DateTimeInterface $date_creation = null;

    public function getDate_creation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDate_creation(\DateTimeInterface $date_creation): self
    {
        $this->date_creation = $date_creation;
        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): static
    {
        $this->date_creation = $date_creation;

        return $this;
    }

}
