<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\UtilisateurRepository;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[ORM\Table(name: 'utilisateur')]
class Utilisateur
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
    private ?string $hash = null;

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(string $hash): static
    {
        $this->hash = $hash;

        return $this;
    }



    #[ORM\Column(name: 'salt', type: 'blob', nullable: true)]
    private $salt = null;

    public function getSalt(): mixed
    {
        return $this->salt;
    }

    public function setSalt(mixed $salt): static
    {
        $this->salt = $salt;

        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $nom = null;

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $prenom = null;

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $address = null;

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): static
    {
        $this->address = $address;

        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $num_tel = null;

    public function getNum_tel(): ?string
    {
        return $this->num_tel;
    }

    public function setNum_tel(?string $num_tel): self
    {
        $this->num_tel = $num_tel;
        return $this;
    }

    #[ORM\Column(name: 'dateJoined', type: 'date', nullable: true)]
    private ?\DateTimeInterface $dateJoined = null;

    public function getDateJoined(): ?\DateTimeInterface
    {
        return $this->dateJoined;
    }

    public function setDateJoined(?\DateTimeInterface $dateJoined): static
    {
        $this->dateJoined = $dateJoined;

        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $role = null;

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;

        return $this;
    }



    #[ORM\Column(name: 'ImageData', type: 'blob', nullable: true)]
    private $ImageData = null; // Suppression du typehint ?string car le blob retourne une ressource
    
    public function getImageData(): mixed
    {
        if (is_resource($this->ImageData)) {
            rewind($this->ImageData); // On rembobine la ressource si nécessaire
            return stream_get_contents($this->ImageData);
        }
        return $this->ImageData;
    }
    
    public function setImageData(mixed $ImageData): static
    {
        // Conversion automatique des strings en ressource
        if (is_string($ImageData)) {
            $this->ImageData = fopen('php://memory', 'r+');
            fwrite($this->ImageData, $ImageData);
            rewind($this->ImageData);
        } else {
            $this->ImageData = $ImageData;
        }
        
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

    #[ORM\Column(type: 'datetime', nullable: false)]
    private ?\DateTimeInterface $updated_at = null;

    public function getUpdated_at(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdated_at(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $password = null;

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): static
    {
        $this->password = $password;

        return $this;
    }

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $reset_token = null;

    public function getReset_token(): ?string
    {
        return $this->reset_token;
    }

    public function setReset_token(?string $reset_token): self
    {
        $this->reset_token = $reset_token;
        return $this;
    }

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $token_expiry = null;

    public function getToken_expiry(): ?\DateTimeInterface
    {
        return $this->token_expiry;
    }

    public function setToken_expiry(?\DateTimeInterface $token_expiry): self
    {
        $this->token_expiry = $token_expiry;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Avi::class, mappedBy: 'utilisateur')]
    private Collection $avis;

    /**
     * @return Collection<int, Avi>
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvi(Avi $avi): static
    {
        if (!$this->avis->contains($avi)) {
            $this->avis->add($avi);
            $avi->setUtilisateur($this);
        }

        return $this;
    }

    public function removeAvi(Avi $avi): static
    {
        if ($this->avis->removeElement($avi)) {
            // set the owning side to null (unless already changed)
            if ($avi->getUtilisateur() === $this) {
                $avi->setUtilisateur(null);
            }
        }

        return $this;
    }

    #[ORM\OneToMany(targetEntity: DemandePack::class, mappedBy: 'utilisateur')]
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
            $demandePack->setUtilisateur($this);
        }

        return $this;
    }

    public function removeDemandePack(DemandePack $demandePack): static
    {
        if ($this->demandePacks->removeElement($demandePack)) {
            // set the owning side to null (unless already changed)
            if ($demandePack->getUtilisateur() === $this) {
                $demandePack->setUtilisateur(null);
            }
        }

        return $this;
    }

    #[ORM\OneToMany(targetEntity: Event::class, mappedBy: 'utilisateur')]
    private Collection $events;

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
            $event->setUtilisateur($this);
        }

        return $this;
    }

    public function removeEvent(Event $event): static
    {
        if ($this->events->removeElement($event)) {
            // set the owning side to null (unless already changed)
            if ($event->getUtilisateur() === $this) {
                $event->setUtilisateur(null);
            }
        }

        return $this;
    }

    #[ORM\OneToMany(targetEntity: NotificationsAdmin::class, mappedBy: 'utilisateur')]
    private Collection $notificationsAdmins;

    /**
     * @return Collection<int, NotificationsAdmin>
     */
    public function getNotificationsAdmins(): Collection
    {
        return $this->notificationsAdmins;
    }

    public function addNotificationsAdmin(NotificationsAdmin $notificationsAdmin): static
    {
        if (!$this->notificationsAdmins->contains($notificationsAdmin)) {
            $this->notificationsAdmins->add($notificationsAdmin);
            $notificationsAdmin->setUtilisateur($this);
        }

        return $this;
    }

    public function removeNotificationsAdmin(NotificationsAdmin $notificationsAdmin): static
    {
        if ($this->notificationsAdmins->removeElement($notificationsAdmin)) {
            // set the owning side to null (unless already changed)
            if ($notificationsAdmin->getUtilisateur() === $this) {
                $notificationsAdmin->setUtilisateur(null);
            }
        }

        return $this;
    }

    #[ORM\OneToMany(targetEntity: Pack::class, mappedBy: 'utilisateur')]
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
            $pack->setUtilisateur($this);
        }

        return $this;
    }

    public function removePack(Pack $pack): static
    {
        if ($this->packs->removeElement($pack)) {
            // set the owning side to null (unless already changed)
            if ($pack->getUtilisateur() === $this) {
                $pack->setUtilisateur(null);
            }
        }

        return $this;
    }

    #[ORM\OneToMany(targetEntity: Panier::class, mappedBy: 'utilisateur')]
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
            $panier->setUtilisateur($this);
        }

        return $this;
    }

    public function removePanier(Panier $panier): static
    {
        if ($this->paniers->removeElement($panier)) {
            // set the owning side to null (unless already changed)
            if ($panier->getUtilisateur() === $this) {
                $panier->setUtilisateur(null);
            }
        }

        return $this;
    }

    #[ORM\OneToMany(targetEntity: Personnel::class, mappedBy: 'utilisateur')]
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
            $personnel->setUtilisateur($this);
        }

        return $this;
    }

    public function removePersonnel(Personnel $personnel): static
    {
        if ($this->personnels->removeElement($personnel)) {
            // set the owning side to null (unless already changed)
            if ($personnel->getUtilisateur() === $this) {
                $personnel->setUtilisateur(null);
            }
        }

        return $this;
    }

    #[ORM\ManyToMany(targetEntity: Event::class, inversedBy: 'utilisateurs')]
    #[ORM\JoinTable(
        name: 'reserve_mat',
        joinColumns: [
            new ORM\JoinColumn(name: 'IdUser', referencedColumnName: 'id')
        ],
        inverseJoinColumns: [
            new ORM\JoinColumn(name: 'id_event', referencedColumnName: 'id')
        ]
    )]
    private Collection $reservedEvents;

    public function __construct()
    {
        $this->avis = new ArrayCollection();
        $this->demandePacks = new ArrayCollection();
        $this->events = new ArrayCollection();
        $this->notificationsAdmins = new ArrayCollection();
        $this->packs = new ArrayCollection();
        $this->paniers = new ArrayCollection();
        $this->personnels = new ArrayCollection();
        $this->reservedEvents = new ArrayCollection();
    }

    /**
     * @return Collection<int, Event>
     */
    public function getReservedEvents(): Collection
    {
        return $this->reservedEvents;
    }

    public function addReservedEvent(Event $reservedEvent): static
    {
        if (!$this->reservedEvents->contains($reservedEvent)) {
            $this->reservedEvents->add($reservedEvent);
        }

        return $this;
    }

    public function removeReservedEvent(Event $reservedEvent): static
    {
        $this->reservedEvents->removeElement($reservedEvent);

        return $this;
    }

    public function getNumTel(): ?string
    {
        return $this->num_tel;
    }

    public function setNumTel(?string $num_tel): static
    {
        $this->num_tel = $num_tel;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): static
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getResetToken(): ?string
    {
        return $this->reset_token;
    }

    public function setResetToken(?string $reset_token): static
    {
        $this->reset_token = $reset_token;

        return $this;
    }

    public function getTokenExpiry(): ?\DateTimeInterface
    {
        return $this->token_expiry;
    }

    public function setTokenExpiry(?\DateTimeInterface $token_expiry): static
    {
        $this->token_expiry = $token_expiry;

        return $this;
    }
    
}
