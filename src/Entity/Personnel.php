<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\PersonnelRepository;
use Tattali\CalendarBundle\TattaliCalendarBundle;


#[ORM\Entity(repositoryClass: PersonnelRepository::class)]
#[ORM\Table(name: 'personnels')]
class Personnel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idP', type: 'integer')]
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

    #[ORM\Column(name: 'nomP', type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le nom ne peut pas être vide")]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères"
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s\-']+$/",
        message: "Le nom ne peut contenir que des lettres, espaces, tirets et apostrophes"
    )]
    private ?string $nomP = null;

    public function getNomP(): ?string
    {
        return $this->nomP;
    }

    public function setNomP(string $nomP): self
    {
        $this->nomP = $nomP;
        return $this;
    }

    #[ORM\Column(name: 'prenomP', type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le prénom ne peut pas être vide")]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "Le prénom doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le prénom ne peut pas dépasser {{ limit }} caractères"
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s\-']+$/",
        message: "Le prénom ne peut contenir que des lettres, espaces, tirets et apostrophes"
    )]
    private ?string $prenomP = null;

    public function getPrenomP(): ?string
    {
        return $this->prenomP;
    }

    public function setPrenomP(string $prenomP): self
    {
        $this->prenomP = $prenomP;
        return $this;
    }

    #[ORM\Column(name: 'serviceP', type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le service ne peut pas être vide")]
    #[Assert\Length(
        max: 100,
        maxMessage: "Le service ne peut pas dépasser {{ limit }} caractères"
    )]
    #[Assert\Choice(
        choices: ["Photographie", "Vidéographie", "Animation", "Décorateur", "Catering", "Logistique"],
        message: "Veuillez choisir un service valide"
    )]
    private ?string $serviceP = null;

    public function getServiceP(): ?string
    {
        return $this->serviceP;
    }

    public function setServiceP(string $serviceP): self
    {
        $this->serviceP = $serviceP;
        return $this;
    }

    #[ORM\Column(name: 'statutP', type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le statut ne peut pas être vide")]

    private ?string $statutP = null;

    public function getStatutP(): ?string
    {
        return $this->statutP;
    }

    public function setStatutP(string $statutP): self
    {
        $this->statutP = $statutP;
        return $this;
    }

    #[ORM\Column(name: 'imageUrl', type: 'string', nullable: false)]

    private ?string $imageUrl = null;

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    #[ORM\Column(name: 'id', type: 'integer', nullable: true)]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    #[ORM\Column(name: 'descriptionP', type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "La description ne peut pas être vide")]
    #[Assert\Length(
        min: 10,
        max: 500,
        minMessage: "La description doit contenir au moins {{ limit }} caractères",
        maxMessage: "La description ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $descriptionP = null;

    public function getDescriptionP(): ?string
    {
        return $this->descriptionP;
    }

    public function setDescriptionP(string $descriptionP): self
    {
        $this->descriptionP = $descriptionP;
        return $this;
    }

    #[ORM\Column(name: 'tarifP', type: 'integer', nullable: false)]
    #[Assert\NotBlank(message: "Le tarif ne peut pas être vide")]
    #[Assert\Type(
        type: "integer",
        message: "Le tarif doit être un nombre entier"
    )]
    #[Assert\Range(
        min: 10,
        max: 10000,
        notInRangeMessage: "Le tarif doit être compris entre {{ min }} et {{ max }} TND"
    )]
    private ?int $tarifP = null;

    public function getTarifP(): ?int
    {
        return $this->tarifP;
    }

    public function setTarifP(int $tarifP): self
    {
        $this->tarifP = $tarifP;
        return $this;
    }

}