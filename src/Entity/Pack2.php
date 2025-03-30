<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\Pack2Repository;

#[ORM\Entity(repositoryClass: Pack2Repository::class)]
#[ORM\Table(name: 'pack2')]
class Pack2
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    #[ORM\ManyToOne(targetEntity: Event::class, inversedBy: 'pack2s')]
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

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $admin_id = null;

    public function getAdmin_id(): ?int
    {
        return $this->admin_id;
    }

    public function setAdmin_id(int $admin_id): self
    {
        $this->admin_id = $admin_id;
        return $this;
    }

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

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

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $capacité = null;

    public function getCapacité(): ?int
    {
        return $this->capacité;
    }

    public function setCapacité(?int $capacité): static
    {
        $this->capacité = $capacité;

        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $nombre_avis = null;

    public function getNombre_avis(): ?int
    {
        return $this->nombre_avis;
    }

    public function setNombre_avis(?int $nombre_avis): self
    {
        $this->nombre_avis = $nombre_avis;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $durée = null;

    public function getDurée(): ?int
    {
        return $this->durée;
    }

    public function setDurée(?int $durée): static
    {
        $this->durée = $durée;

        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $somme_totale_notes = null;

    public function getSomme_totale_notes(): ?int
    {
        return $this->somme_totale_notes;
    }

    public function setSomme_totale_notes(?int $somme_totale_notes): self
    {
        $this->somme_totale_notes = $somme_totale_notes;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: true)]
    private ?float $note = null;

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): static
    {
        $this->note = $note;

        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $event_id = null;

    public function getEvent_id(): ?int
    {
        return $this->event_id;
    }

    public function setEvent_id(int $event_id): self
    {
        $this->event_id = $event_id;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $end_date = null;

    public function getEnd_date(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEnd_date(?\DateTimeInterface $end_date): self
    {
        $this->end_date = $end_date;
        return $this;
    }

    public function getAdminId(): ?int
    {
        return $this->admin_id;
    }

    public function setAdminId(int $admin_id): static
    {
        $this->admin_id = $admin_id;

        return $this;
    }

    public function getNombreAvis(): ?int
    {
        return $this->nombre_avis;
    }

    public function setNombreAvis(?int $nombre_avis): static
    {
        $this->nombre_avis = $nombre_avis;

        return $this;
    }

    public function getSommeTotaleNotes(): ?int
    {
        return $this->somme_totale_notes;
    }

    public function setSommeTotaleNotes(?int $somme_totale_notes): static
    {
        $this->somme_totale_notes = $somme_totale_notes;

        return $this;
    }

    public function getEventId(): ?int
    {
        return $this->event_id;
    }

    public function setEventId(int $event_id): static
    {
        $this->event_id = $event_id;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(?\DateTimeInterface $end_date): static
    {
        $this->end_date = $end_date;

        return $this;
    }

}
