<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\PersonnelRepository;

#[ORM\Entity(repositoryClass: PersonnelRepository::class)]
#[ORM\Table(name: 'personnels')]
class Personnel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $idP = null;

    public function getIdP(): ?int
    {
        return $this->idP;
    }

    public function setIdP(int $idP): self
    {
        $this->idP = $idP;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $nomP = null;

    public function getNomP(): ?string
    {
        return $this->nomP;
    }

    public function setNomP(string $nomP): static
    {
        $this->nomP = $nomP;

        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $prenomP = null;

    public function getPrenomP(): ?string
    {
        return $this->prenomP;
    }

    public function setPrenomP(string $prenomP): static
    {
        $this->prenomP = $prenomP;

        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $serviceP = null;

    public function getServiceP(): ?string
    {
        return $this->serviceP;
    }

    public function setServiceP(string $serviceP): static
    {
        $this->serviceP = $serviceP;

        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $statutP = null;

    public function getStatutP(): ?string
    {
        return $this->statutP;
    }

    public function setStatutP(string $statutP): static
    {
        $this->statutP = $statutP;

        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $imageUrl = null;

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): static
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'personnels')]
    #[ORM\JoinColumn(name: 'id', referencedColumnName: 'id')]
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

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $descriptionP = null;

    public function getDescriptionP(): ?string
    {
        return $this->descriptionP;
    }

    public function setDescriptionP(string $descriptionP): static
    {
        $this->descriptionP = $descriptionP;

        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $tarifP = null;

    public function getTarifP(): ?int
    {
        return $this->tarifP;
    }

    public function setTarifP(int $tarifP): static
    {
        $this->tarifP = $tarifP;

        return $this;
    }

    #[ORM\ManyToMany(targetEntity: Event::class, inversedBy: 'personnels')]
    #[ORM\JoinTable(
        name: 'reservation_perso',
        joinColumns: [
            new ORM\JoinColumn(name: 'idP', referencedColumnName: 'idP')
        ],
        inverseJoinColumns: [
            new ORM\JoinColumn(name: 'id', referencedColumnName: 'id')
        ]
    )]
    private Collection $events;

    public function __construct()
    {
        $this->events = new ArrayCollection();
    }

    /**
     * @return Collection<int, Event>
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(Event $event): static
    {
        if (!$this->events->contains($event)) {
            $this->events->add($event);
        }

        return $this;
    }

    public function removeEvent(Event $event): static
    {
        $this->events->removeElement($event);

        return $this;
    }

}
