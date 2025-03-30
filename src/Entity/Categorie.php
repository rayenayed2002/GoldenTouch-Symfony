<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\CategorieRepository;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
#[ORM\Table(name: 'categories')]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_cat = null;

    public function getId_cat(): ?int
    {
        return $this->id_cat;
    }

    public function setId_cat(int $id_cat): self
    {
        $this->id_cat = $id_cat;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $nom_cat = null;

    public function getNom_cat(): ?string
    {
        return $this->nom_cat;
    }

    public function setNom_cat(string $nom_cat): self
    {
        $this->nom_cat = $nom_cat;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $description_cat = null;

    public function getDescription_cat(): ?string
    {
        return $this->description_cat;
    }

    public function setDescription_cat(string $description_cat): self
    {
        $this->description_cat = $description_cat;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Materielle::class, mappedBy: 'categorie')]
    private Collection $materielles;

    public function __construct()
    {
        $this->materielles = new ArrayCollection();
    }

    /**
     * @return Collection<int, Materielle>
     */
    public function getMaterielles(): Collection
    {
        return $this->materielles;
    }

    public function addMaterielle(Materielle $materielle): static
    {
        if (!$this->materielles->contains($materielle)) {
            $this->materielles->add($materielle);
            $materielle->setCategorie($this);
        }

        return $this;
    }

    public function removeMaterielle(Materielle $materielle): static
    {
        if ($this->materielles->removeElement($materielle)) {
            // set the owning side to null (unless already changed)
            if ($materielle->getCategorie() === $this) {
                $materielle->setCategorie(null);
            }
        }

        return $this;
    }

    public function getIdCat(): ?int
    {
        return $this->id_cat;
    }

    public function getNomCat(): ?string
    {
        return $this->nom_cat;
    }

    public function setNomCat(string $nom_cat): static
    {
        $this->nom_cat = $nom_cat;

        return $this;
    }

    public function getDescriptionCat(): ?string
    {
        return $this->description_cat;
    }

    public function setDescriptionCat(string $description_cat): static
    {
        $this->description_cat = $description_cat;

        return $this;
    }

}
