<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\ReserverLieuRepository;

#[ORM\Entity(repositoryClass: ReserverLieuRepository::class)]
#[ORM\Table(name: 'reserver_lieu')]
class ReservationLieu
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

    #[ORM\ManyToOne(targetEntity: Lieu::class)]
    #[ORM\JoinColumn(name: 'lieu_id', referencedColumnName: 'id')]
    private ?Lieu $lieu = null;

    #[ORM\ManyToOne(targetEntity: Event::class, inversedBy: 'reservationsLieu')]
    #[ORM\JoinColumn(name: 'event_id', referencedColumnName: 'id')]
    private ?Event $event = null;

    public function getLieu(): ?Lieu
    {
        return $this->lieu;
    }

    public function setLieu(?Lieu $lieu): static
    {
        $this->lieu = $lieu;
        return $this;
    }

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
    private ?int $lieu_id = null;

    public function getLieu_id(): ?int
    {
        return $this->lieu_id;
    }

    public function setLieu_id(int $lieu_id): self
    {
        $this->lieu_id = $lieu_id;
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

    #[ORM\Column(type: 'datetime', nullable: false)]
    private ?\DateTimeInterface $date_reservation = null;

    public function getDate_reservation(): ?\DateTimeInterface
    {
        return $this->date_reservation;
    }

    public function setDate_reservation(\DateTimeInterface $date_reservation): self
    {
        $this->date_reservation = $date_reservation;
        return $this;
    }

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private ?string $status = 'pending';

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    #[ORM\Column(type: 'datetime', nullable: false)]
    private ?\DateTimeInterface $created_at = null;

    public function getCreated_at(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreated_at(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function __construct()
    {
        $this->created_at = new \DateTime();
    }
}