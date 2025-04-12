<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\MaterielleRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MaterielleRepository::class)]
#[ORM\Table(name: 'materielles')]
#[ORM\HasLifecycleCallbacks]

class Materielle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_mat = null;

    public function getId_mat(): ?int
    {
        return $this->id_mat;
    }

    public function setId_mat(int $id_mat): self
    {
        $this->id_mat = $id_mat;
        return $this;
    }

    #[ORM\Column(type: 'string', length: 100, nullable: false)]
    #[Assert\NotBlank(message: 'Le nom du matériel est obligatoire.')]
    #[Assert\Length(
        min: 3, 
        max: 100, 
        minMessage: 'Le nom doit comporter au moins {{ limit }} caractères.',
        maxMessage: 'Le nom ne peut pas dépasser {{ limit }} caractères.'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z0-9\s\-_]+$/',
        message: 'Le nom ne peut contenir que des lettres, chiffres, espaces, tirets et underscores.'
    )]
    private ?string $nom_mat = null;
    public function getNom_mat(): ?string
    {
        return $this->nom_mat;
    }

    public function setNom_mat(string $nom_mat): self
    {
        $this->nom_mat = $nom_mat;
        return $this;
    }


    #[ORM\Column(type: 'text', nullable: false)]
    #[Assert\NotBlank(message: 'La description est obligatoire.')]
    #[Assert\Length(
        min: 10,
        max: 1000,
        minMessage: 'La description doit comporter au moins {{ limit }} caractères.',
        maxMessage: 'La description ne peut pas dépasser {{ limit }} caractères.'
    )]
    private ?string $description_mat = null;

    public function getDescription_mat(): ?string
    {
        return $this->description_mat;
    }

    public function setDescription_mat(string $description_mat): self
    {
        $this->description_mat = $description_mat;
        return $this;
    }

    #[ORM\Column(type: 'string', length: 255, nullable: false)]
    private ?string $photo_mat = null;

    public function getPhoto_mat(): ?string
    {
        return $this->photo_mat;
    }

    public function setPhoto_mat(string $photo_mat): self
    {
        $this->photo_mat = $photo_mat;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    #[Assert\NotBlank(message: 'La quantité est obligatoire.')]
    #[Assert\PositiveOrZero(message: 'La quantité doit être un nombre positif ou zéro.')]
    #[Assert\LessThanOrEqual(
        value: 1000,
        message: 'La quantité ne peut pas dépasser {{ value }}.'
    )]    private ?int $quantite_mat = null;

    public function getQuantite_mat(): ?int
    {
        return $this->quantite_mat;
    }

    public function setQuantite_mat(int $quantite_mat): self
    {
        $this->quantite_mat = $quantite_mat;
        return $this;
    }

    #[ORM\Column(type: 'float', nullable: false)]
    #[Assert\NotBlank(message: 'Le prix est obligatoire.')]
    #[Assert\Positive(message: 'Le prix doit être un nombre positif.')]
    private ?float $prix_mat = null;

    public function getPrix_mat(): ?float
    {
        return $this->prix_mat;
    }

    public function setPrix_mat(float $prix_mat): self
    {
        $this->prix_mat = $prix_mat;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $categorie_mat = null;

    public function getCategorie_mat(): ?int
    {
        return $this->categorie_mat;
    }

    public function setCategorie_mat(int $categorie_mat): self
    {
        $this->categorie_mat = $categorie_mat;
        return $this;
    }
    
    #[ORM\ManyToMany(targetEntity: Utilisateur::class, inversedBy: 'materielles')]
    #[ORM\JoinTable(
        name: 'reserve_mat',
        joinColumns: [
            new ORM\JoinColumn(name: 'id_mat', referencedColumnName: 'id_mat')
        ],
        inverseJoinColumns: [
            new ORM\JoinColumn(name: 'IdUser', referencedColumnName: 'id')
        ]
    )]
    private Collection $utilisateurs;

    public function __construct()
    {
        $this->utilisateurs = new ArrayCollection();

    }

    /**
     * @return Collection<int, Utilisateur>
     */
    public function getUtilisateurs(): Collection
    {
        return $this->utilisateurs;
    }

    public function addUtilisateur(Utilisateur $utilisateur): static
    {
        if (!$this->utilisateurs->contains($utilisateur)) {
            $this->utilisateurs->add($utilisateur);
        }

        return $this;
    }

    public function removeUtilisateur(Utilisateur $utilisateur): static
    {
        $this->utilisateurs->removeElement($utilisateur);

        return $this;
    }

    public function getIdMat(): ?int
    {
        return $this->id_mat;
    }

    public function getNomMat(): ?string
    {
        return $this->nom_mat;
    }

    public function setNomMat(string $nom_mat): static
    {
        $this->nom_mat = $nom_mat;

        return $this;
    }

    public function getDescriptionMat(): ?string
    {
        return $this->description_mat;
    }

    public function setDescriptionMat(string $description_mat): static
    {
        $this->description_mat = $description_mat;

        return $this;
    }

    public function getPhotoMat(): ?string
    {
        return $this->photo_mat;
    }

    public function setPhotoMat(string $photo_mat): static
    {
        $this->photo_mat = $photo_mat;

        return $this;
    }

    public function getQuantiteMat(): ?int
    {
        return $this->quantite_mat;
    }

    public function setQuantiteMat(int $quantite_mat): static
    {
        $this->quantite_mat = $quantite_mat;

        return $this;
    }

    public function getPrixMat(): ?float
    {
        return $this->prix_mat;
    }

    public function setPrixMat(float $prix_mat): static
    {
        $this->prix_mat = $prix_mat;

        return $this;
    }

}
