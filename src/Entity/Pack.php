<?php

namespace App\Entity;

use App\Repository\PackRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PackRepository::class)]
#[ORM\Table(name: 'pack')]
class Pack
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?float $prix = null;

    #[ORM\Column(name: 'capacité')]
    private ?int $capacite = null;

    #[ORM\Column(name: 'durée')]
    private ?int $duree = null;

    #[ORM\Column(name: 'end_date', type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $endDate = null;

    #[ORM\ManyToOne(inversedBy: 'packs')]
    #[ORM\JoinColumn(name: 'event_id', nullable: false)]
    private ?Event $event = null;

    #[ORM\Column(name: 'admin_id')]
    private ?int $adminId = null;

    public function __construct()
    {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;
        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): self
    {
        $this->capacite = $capacite;
        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): self
    {
        $this->duree = $duree;
        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;
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

    public function getAdminId(): ?int
    {
        return $this->adminId;
    }

    public function setAdminId(int $adminId): self
    {
        $this->adminId = $adminId;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->event ? $this->event->getNom() : null;
    }

    public function getPhoto(): ?string
    {
        return $this->event ? $this->event->getPhoto() : null;
    }

    public function getCategorie(): ?string
    {
        return $this->event ? $this->event->getCategorie() : null;
    }

    public function equals(Pack $pack): bool
    {
        return $this->id === $pack->getId();
    }

    public function __toString(): string
    {
        return sprintf(
            'Pack{id=%d, description=\'%s\', prix=%f, capacité=%d, durée=%d, endDate=\'%s\', eventId=%d, adminId=%d}',
            $this->id,
            $this->description,
            $this->prix,
            $this->capacite,
            $this->duree,
            $this->endDate,
            $this->event->getId(),
            $this->adminId
        );
    }
}