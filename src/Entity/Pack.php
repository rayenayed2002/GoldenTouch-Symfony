<?php

namespace App\Entity;

use App\Repository\PackRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PackRepository::class)]
class Pack
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Assert\NotBlank(message: 'La description ne peut pas être vide')]
    private ?string $description = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    #[Assert\NotBlank(message: 'Le prix ne peut pas être vide')]
    #[Assert\Positive(message: 'Le prix doit être un nombre positif')]
    private ?float $prix = null;

    #[ORM\Column(name: 'capacité')]
    #[Assert\NotBlank(message: 'La capacité ne peut pas être vide')]
    #[Assert\Positive(message: 'La capacité doit être un nombre positif')]
    private ?int $capacite = null;

    #[ORM\Column(name: 'durée')]
    #[Assert\NotBlank(message: 'La durée ne peut pas être vide')]
    #[Assert\Positive(message: 'La durée doit être un nombre positif')]
    private ?int $duree = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    #[Assert\NotBlank(message: 'La date de fin ne peut pas être vide')]
    #[Assert\Date(message: 'La date de fin n\'est pas valide')]
    private ?\DateTime $endDate = null;

    #[ORM\ManyToOne(targetEntity: Event::class, inversedBy: 'packs')]
    #[ORM\JoinColumn(name: 'event_id', referencedColumnName: 'id', nullable: false)]
    #[Assert\NotNull(message: 'L\'événement ne peut pas être vide')]
    private ?Event $event = null;

    #[ORM\Column(name: 'admin_id')]
    #[Assert\NotBlank(message: 'L\'identifiant de l\'administrateur ne peut pas être vide')]
    #[Assert\Positive(message: 'L\'identifiant de l\'administrateur doit être un nombre positif')]
    private ?int $adminId = null;

    #[ORM\OneToMany(mappedBy: 'pack', targetEntity: Avis::class)]
    private Collection $avis;

    public function __construct()
    {
        $this->avis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
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

    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    public function setEndDate($endDate): self
    {
        if ($endDate instanceof \DateTime) {
            $this->endDate = $endDate;
        } elseif (is_string($endDate)) {
            $this->endDate = \DateTime::createFromFormat('Y-m-d', $endDate);
        } else {
            $this->endDate = null;
        }
        return $this;
    }

    public function getEndDateAsString(): ?string
    {
        return $this->endDate ? $this->endDate->format('Y-m-d') : null;
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

    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvis(Avis $avis): self
    {
        if (!$this->avis->contains($avis)) {
            $this->avis[] = $avis;
            $avis->setPack($this);
        }

        return $this;
    }

    public function removeAvis(Avis $avis): self
    {
        if ($this->avis->removeElement($avis)) {
            // set the owning side to null (unless already changed)
            if ($avis->getPack() === $this) {
                $avis->setPack(null);
            }
        }

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
        if (!$this->event) return null;
        $categorie = $this->event->getCategorie();
        return $categorie ? $categorie->value : null;
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
            $this->endDate ? $this->endDate->format('Y-m-d') : 'null',
            $this->event->getId(),
            $this->adminId
        );
    }
}