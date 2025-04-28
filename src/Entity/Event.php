<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Enum\CategorieEvent;
use App\Repository\EventRepository;

#[ORM\Entity(repositoryClass: EventRepository::class)]
#[ORM\Table(name: 'event')]
class Event
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

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $nom = null;

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'events')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id')]
    private ?User $user = null;

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    #[ORM\Column(type: 'string', length: 50, nullable: false)]
    private ?string $categorie = null;
    
    // Getter: Returns the enum instance or null if no value is set
    public function getCategorie(): ?CategorieEvent
    {
        return $this->categorie ? CategorieEvent::from($this->categorie) : null;
    }
    
    // Setter: Accepts the enum and stores its value (string) in the database
    public function setCategorie(CategorieEvent $categorie): static
    {
        $this->categorie = $categorie->value; // Store the enum value as a string
        return $this;
    }
    

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $photo = null;

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $date = null;

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $type = null;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    #[ORM\OneToMany(targetEntity: DemandePack::class, mappedBy: 'event')]
    private Collection $demandePacks;

    /**
     * @return Collection<int, DemandePack>
     */
    public function getDemandePacks(): Collection
    {
        return $this->demandePacks;
    }

    public function addDemandePack(DemandePack $demandePack): static
    {
        if (!$this->demandePacks->contains($demandePack)) {
            $this->demandePacks->add($demandePack);
            $demandePack->setEvent($this);
        }

        return $this;
    }

    public function removeDemandePack(DemandePack $demandePack): static
    {
        if ($this->demandePacks->removeElement($demandePack)) {
            // set the owning side to null (unless already changed)
            if ($demandePack->getEvent() === $this) {
                $demandePack->setEvent(null);
            }
        }

        return $this;
    }

   // src/Entity/Event.php
#[ORM\OneToMany(targetEntity: Pack::class, mappedBy: 'event')]
private Collection $packs;

/**
 * @return Collection<int, Pack>
 */
public function getPacks(): Collection
{
    return $this->packs;
}

public function addPack(Pack $pack): static
{
    if (!$this->packs->contains($pack)) {
        $this->packs->add($pack);
        $pack->setEvent($this);
    }
    return $this;
}

public function removePack(Pack $pack): static
{
    if ($this->packs->removeElement($pack)) {
        if ($pack->getEvent() === $this) {
            $pack->setEvent(null);
        }
    }
    return $this;
}


    #[ORM\OneToMany(targetEntity: Pack2::class, mappedBy: 'event')]
    private Collection $pack2s;

    /**
     * @return Collection<int, Pack2>
     */
    public function getPack2s(): Collection
    {
        return $this->pack2s;
    }

    public function addPack2(Pack2 $pack2): static
    {
        if (!$this->pack2s->contains($pack2)) {
            $this->pack2s->add($pack2);
            $pack2->setEvent($this);
        }

        return $this;
    }

    public function removePack2(Pack2 $pack2): static
    {
        if ($this->pack2s->removeElement($pack2)) {
            // set the owning side to null (unless already changed)
            if ($pack2->getEvent() === $this) {
                $pack2->setEvent(null);
            }
        }

        return $this;
    }

    #[ORM\OneToMany(targetEntity: Panier::class, mappedBy: 'event')]
    private Collection $paniers;

    /**
     * @return Collection<int, Panier>
     */
    public function getPaniers(): Collection
    {
        return $this->paniers;
    }

    public function addPanier(Panier $panier): static
    {
        if (!$this->paniers->contains($panier)) {
            $this->paniers->add($panier);
            $panier->setEvent($this);
        }

        return $this;
    }

    public function removePanier(Panier $panier): static
    {
        if ($this->paniers->removeElement($panier)) {
            // set the owning side to null (unless already changed)
            if ($panier->getEvent() === $this) {
                $panier->setEvent(null);
            }
        }

        return $this;
    }

    #[ORM\ManyToMany(targetEntity: Payment::class, inversedBy: 'events')]
    #[ORM\JoinTable(
        name: 'detailpaiment',
        joinColumns: [
            new ORM\JoinColumn(name: 'idEvent', referencedColumnName: 'id')
        ],
        inverseJoinColumns: [
            new ORM\JoinColumn(name: 'idPaiment', referencedColumnName: 'id')
        ]
    )]
    private Collection $payments;

    /**
     * @return Collection<int, Payment>
     */
    public function getPayments(): Collection
    {
        return $this->payments;
    }

    public function addPayment(Payment $payment): static
    {
        if (!$this->payments->contains($payment)) {
            $this->payments->add($payment);
        }

        return $this;
    }

    public function removePayment(Payment $payment): static
    {
        $this->payments->removeElement($payment);

        return $this;
    }

    #[ORM\ManyToMany(targetEntity: Personnel::class, inversedBy: 'events')]
    #[ORM\JoinTable(
        name: 'reservation_perso',
        joinColumns: [
            new ORM\JoinColumn(name: 'id', referencedColumnName: 'id')
        ],
        inverseJoinColumns: [
            new ORM\JoinColumn(name: 'idP', referencedColumnName: 'idP')
        ]
    )]
    private Collection $personnels;

    /**
     * @return Collection<int, Personnel>
     */
    public function getPersonnels(): Collection
    {
        return $this->personnels;
    }

    public function addPersonnel(Personnel $personnel): static
    {
        if (!$this->personnels->contains($personnel)) {
            $this->personnels->add($personnel);
        }

        return $this;
    }

    public function removePersonnel(Personnel $personnel): static
    {
        $this->personnels->removeElement($personnel);

        return $this;
    }

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'events')]
    #[ORM\JoinTable(
        name: 'reserve_mat',
        joinColumns: [
            new ORM\JoinColumn(name: 'id_event', referencedColumnName: 'id')
        ],
        inverseJoinColumns: [
            new ORM\JoinColumn(name: 'IdUser', referencedColumnName: 'id')
        ]
    )]
    private Collection $users;
    #[ORM\OneToMany(targetEntity: ReservMat::class, mappedBy: 'event')]
private Collection $reservationsMaterielles;


    public function __construct()
    {
        $this->demandePacks = new ArrayCollection();
        $this->packs = new ArrayCollection();
        $this->pack2s = new ArrayCollection();
        $this->paniers = new ArrayCollection();
        $this->payments = new ArrayCollection();
        $this->personnels = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->reservationsMaterielles = new ArrayCollection();
        $this->reservationsLieu = new ArrayCollection();
        $this->detailPayments = new ArrayCollection();


    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
        }

        return $this;
    }

    public function removeUser(User $user): static
    {
        $this->users->removeElement($user);

        return $this;
    }
    public function getReservationsMaterielles(): Collection
    {
        return $this->reservationsMaterielles;
    }
    
    public function addReservationsMaterielle(ReservMat $reservationsMaterielle): static
    {
        if (!$this->reservationsMaterielles->contains($reservationsMaterielle)) {
            $this->reservationsMaterielles->add($reservationsMaterielle);
            $reservationsMaterielle->setEvent($this);
        }
        return $this;
    }
    
    public function removeReservationsMaterielle(ReservMat $reservationsMaterielle): static
    {
        if ($this->reservationsMaterielles->removeElement($reservationsMaterielle)) {
            if ($reservationsMaterielle->getEvent() === $this) {
                $reservationsMaterielle->setEvent(null);
            }
        }
        return $this;
    }
    
    // Helper method to get materielles through reservations
    public function getMaterielles(): array
    {
        return $this->reservationsMaterielles->map(
            fn(ReservMat $reservation) => $reservation->getMaterielle()
        )->toArray();
    }


    #[ORM\OneToMany(targetEntity: ReserverLieu::class, mappedBy: 'event')]
private Collection $reservationsLieu;



/**
 * @return Collection<int, ReserverLieu>
 */
public function getReservationsLieu(): Collection
{
    return $this->reservationsLieu;
}

// Helper method to get lieux through reservations
public function getLieux(): array
{
    return $this->reservationsLieu->map(
        fn(ReserverLieu $reservation) => $reservation->getLieu()
    )->toArray();
}
#[ORM\OneToMany(mappedBy: 'event', targetEntity: DetailPayment::class)]
private Collection $detailPayments;
public function getDetailPayments(): Collection
{
    return $this->detailPayments;
}

public function getMaterielTotal(): float
{
    return $this->reservationsMaterielles->reduce(
        function(float $total, ReservMat $reservation) {
            $materielle = $reservation->getMaterielle();
            return $total + ($reservation->getQuantite() * $materielle->getPrixMat());
        },
        0.0
    );
}

public function getLieuTotal(): float
{
    return $this->reservationsLieu->reduce(
        function(float $total, ReserverLieu $reservation) {
            $lieu = $reservation->getLieu();
            return $total + $lieu->getPrice();
        },
        0.0
    );
}

public function getPersonnelTotal(): float
{
    return $this->personnels->reduce(
        function(float $total, Personnel $personnel) {
            return $total + $personnel->getTarifP();
        },
        0.0
    );
}

public function getTotalPrice(): float
{
    return $this->getMaterielTotal() 
         + $this->getLieuTotal()
         + $this->getPersonnelTotal();
}
}
