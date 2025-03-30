<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\DemandePackRepository;

#[ORM\Entity(repositoryClass: DemandePackRepository::class)]
#[ORM\Table(name: 'demande_pack')]
class DemandePack
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

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'demandePacks')]
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

    #[ORM\ManyToOne(targetEntity: Pack::class, inversedBy: 'demandePacks')]
    #[ORM\JoinColumn(name: 'pack_id', referencedColumnName: 'id')]
    private ?Pack $pack = null;

    public function getPack(): ?Pack
    {
        return $this->pack;
    }

    public function setPack(?Pack $pack): static
    {
        $this->pack = $pack;

        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Event::class, inversedBy: 'demandePacks')]
    #[ORM\JoinColumn(name: 'event_id', referencedColumnName: 'id')]
    private ?Event $event = null;

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): static
    {
        $this->event = $event;

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
    private ?\DateTimeInterface $date_demande = null;

    public function getDate_demande(): ?\DateTimeInterface
    {
        return $this->date_demande;
    }

    public function setDate_demande(\DateTimeInterface $date_demande): self
    {
        $this->date_demande = $date_demande;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: false)]
    private ?float $prix = null;

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    #[ORM\OneToMany(targetEntity: NotificationsAdmin::class, mappedBy: 'demandePack')]
    private Collection $notificationsAdmins;

    public function __construct()
    {
        $this->notificationsAdmins = new ArrayCollection();
    }

    /**
     * @return Collection<int, NotificationsAdmin>
     */
    public function getNotificationsAdmins(): Collection
    {
        return $this->notificationsAdmins;
    }

    public function addNotificationsAdmin(NotificationsAdmin $notificationsAdmin): static
    {
        if (!$this->notificationsAdmins->contains($notificationsAdmin)) {
            $this->notificationsAdmins->add($notificationsAdmin);
            $notificationsAdmin->setDemandePack($this);
        }

        return $this;
    }

    public function removeNotificationsAdmin(NotificationsAdmin $notificationsAdmin): static
    {
        if ($this->notificationsAdmins->removeElement($notificationsAdmin)) {
            // set the owning side to null (unless already changed)
            if ($notificationsAdmin->getDemandePack() === $this) {
                $notificationsAdmin->setDemandePack(null);
            }
        }

        return $this;
    }

    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->date_demande;
    }

    public function setDateDemande(\DateTimeInterface $date_demande): static
    {
        $this->date_demande = $date_demande;

        return $this;
    }

}
