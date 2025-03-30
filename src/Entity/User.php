<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\UserRepository;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'user')]
class User
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

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $username = null;

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $email = null;

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $password = null;

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $role = null;

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): static
    {
        $this->role = $role;

        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $status = null;

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $purchased_packs = null;

    public function getPurchased_packs(): ?string
    {
        return $this->purchased_packs;
    }

    public function setPurchased_packs(?string $purchased_packs): self
    {
        $this->purchased_packs = $purchased_packs;
        return $this;
    }

    #[ORM\ManyToMany(targetEntity: Pack::class, inversedBy: 'users')]
    #[ORM\JoinTable(
        name: 'achats',
        joinColumns: [
            new ORM\JoinColumn(name: 'id_utilisateur', referencedColumnName: 'id')
        ],
        inverseJoinColumns: [
            new ORM\JoinColumn(name: 'id_pack', referencedColumnName: 'id')
        ]
    )]
    private Collection $purchasedPacks;

    /**
     * @return Collection<int, Pack>
     */
    public function getPurchasedPacks(): Collection
    {
        return $this->purchasedPacks;
    }

    public function addPurchasedPack(Pack $purchasedPack): static
    {
        if (!$this->purchasedPacks->contains($purchasedPack)) {
            $this->purchasedPacks->add($purchasedPack);
        }

        return $this;
    }

    public function removePurchasedPack(Pack $purchasedPack): static
    {
        $this->purchasedPacks->removeElement($purchasedPack);

        return $this;
    }

    #[ORM\ManyToMany(targetEntity: Pack::class, inversedBy: 'users')]
    #[ORM\JoinTable(
        name: 'basket',
        joinColumns: [
            new ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id')
        ],
        inverseJoinColumns: [
            new ORM\JoinColumn(name: 'pack_id', referencedColumnName: 'id')
        ]
    )]
    private Collection $basketPacks;

    public function __construct()
    {
        $this->purchasedPacks = new ArrayCollection();
        $this->basketPacks = new ArrayCollection();
    }

    /**
     * @return Collection<int, Pack>
     */
    public function getBasketPacks(): Collection
    {
        return $this->basketPacks;
    }

    public function addBasketPack(Pack $basketPack): static
    {
        if (!$this->basketPacks->contains($basketPack)) {
            $this->basketPacks->add($basketPack);
        }

        return $this;
    }

    public function removeBasketPack(Pack $basketPack): static
    {
        $this->basketPacks->removeElement($basketPack);

        return $this;
    }

    public function setPurchasedPacks(?string $purchased_packs): static
    {
        $this->purchased_packs = $purchased_packs;

        return $this;
    }

}
