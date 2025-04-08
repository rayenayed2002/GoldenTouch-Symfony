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
    #[ORM\Column(name: 'idP')]
    private ?int $idP = null;

    #[ORM\Column(name: 'nomP', length: 255)]
    private ?string $nomP = null;

    #[ORM\Column(name: 'prenomP', length: 255)]
    private ?string $prenomP = null;

    #[ORM\Column(name: 'serviceP', length: 255)]
    private ?string $serviceP = null;

    #[ORM\Column(name: 'statutP', length: 255)]
    private ?string $statutP = null;

    #[ORM\Column(name: 'imageUrl', length: 255)]
    private ?string $imageUrl = null;

    #[ORM\Column(name: 'descriptionP', length: 255)]
    private ?string $descriptionP = null;

    #[ORM\Column(name: 'tarifP')]
    private ?int $tarifP = null;

    #[ORM\Column(name: 'id', nullable: true)]
    private ?int $utilisateurId = null;

    #[ORM\ManyToMany(targetEntity: Event::class, mappedBy: "personnels")]
    private Collection $assignedEvents;

    public function __construct()
    {
        $this->assignedEvents = new ArrayCollection();
    }

    public function getIdP(): ?int
    {
        return $this->idP;
    }

    public function getNomP(): ?string
    {
        return $this->nomP;
    }

    public function setNomP(string $nomP): self
    {
        $this->nomP = $nomP;
        return $this;
    }

    public function getPrenomP(): ?string
    {
        return $this->prenomP;
    }

    public function setPrenomP(string $prenomP): self
    {
        $this->prenomP = $prenomP;
        return $this;
    }

    public function getServiceP(): ?string
    {
        return $this->serviceP;
    }

    public function setServiceP(string $serviceP): self
    {
        $this->serviceP = $serviceP;
        return $this;
    }

    public function getStatutP(): ?string
    {
        return $this->statutP;
    }

    public function setStatutP(string $statutP): self
    {
        $this->statutP = $statutP;
        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    public function getDescriptionP(): ?string
    {
        return $this->descriptionP;
    }

    public function setDescriptionP(string $descriptionP): self
    {
        $this->descriptionP = $descriptionP;
        return $this;
    }

    public function getTarifP(): ?int
    {
        return $this->tarifP;
    }

    public function setTarifP(int $tarifP): self
    {
        $this->tarifP = $tarifP;
        return $this;
    }

    public function getUtilisateurId(): ?int
    {
        return $this->utilisateurId;
    }

    public function setUtilisateurId(?int $utilisateurId): self
    {
        $this->utilisateurId = $utilisateurId;
        return $this;
    }

    public function getAssignedEvents(): Collection
    {
        return $this->assignedEvents;
    }

    public function addAssignedEvent(Event $event): self
    {
        if (!$this->assignedEvents->contains($event)) {
            $this->assignedEvents[] = $event;
            $event->addPersonnel($this);
        }
        return $this;
    }

    public function removeAssignedEvent(Event $event): self
    {
        if ($this->assignedEvents->removeElement($event)) {
            $event->removePersonnel($this);
        }
        return $this;
    }
}
