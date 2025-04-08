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
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\ManyToMany(targetEntity: Event::class, inversedBy: "utilisateurs")]
    #[ORM\JoinTable(name: "utilisateur_event")]
    private Collection $participatedEvents;

    #[ORM\Column(type: "string", nullable: true)]
    private ?string $address = null;

    #[ORM\Column(type: "string", nullable: true)]
    private ?string $num_tel = null;

    #[ORM\Column(type: "string", nullable: true)]
    private ?string $reset_token = null;

    #[ORM\Column(name: 'dateJoined', type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateJoined = null;

    #[ORM\Column(type: Types::BLOB, nullable: true)]
    private $hash = null;

    #[ORM\Column(name: 'created_at', type: 'datetime', nullable: false, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(name: 'updated_at', type: 'datetime', nullable: false, options: ['default' => 'CURRENT_TIMESTAMP', 'on_update' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column(name: 'token_expiry', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $tokenExpiry = null;

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $role = null;

    #[ORM\Column(name: 'ImageData', type: Types::BLOB, nullable: true)]
    private $imageData = null;

    #[ORM\OneToMany(targetEntity: Avi::class, mappedBy: 'utilisateur')]
    private Collection $avis;

    #[ORM\OneToMany(targetEntity: DemandePack::class, mappedBy: 'utilisateur')]
    private Collection $demandePacks;

    #[ORM\OneToMany(targetEntity: NotificationsAdmin::class, mappedBy: 'utilisateur')]
    private Collection $notificationsAdmins;

    #[ORM\OneToMany(targetEntity: Pack::class, mappedBy: 'utilisateur')]
    private Collection $packs;

    #[ORM\OneToMany(targetEntity: Panier::class, mappedBy: 'utilisateur')]
    private Collection $paniers;

    #[ORM\OneToMany(targetEntity: Personnel::class, mappedBy: 'utilisateur')]
    private Collection $personnels;

    #[ORM\OneToMany(targetEntity: Event::class, mappedBy: 'utilisateur')]
    private Collection $createdEvents;

    #[ORM\Column(type: 'blob', nullable: false)]
    private $salt;

    public function __construct()
    {
        $this->participatedEvents = new ArrayCollection();
        $this->createdEvents = new ArrayCollection();
        $this->role = 'ROLE_USER';
        $this->avis = new ArrayCollection();
        $this->demandePacks = new ArrayCollection();
        $this->notificationsAdmins = new ArrayCollection();
        $this->packs = new ArrayCollection();
        $this->paniers = new ArrayCollection();
        $this->personnels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSalt(): string
    {
        if (is_resource($this->salt)) {
            return stream_get_contents($this->salt);
        }
        return $this->salt;
    }
    
    public function setSalt(string $salt): static
    {
        $this->salt = $salt;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): static
    {
        $this->address = $address;
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

    public function getResetToken(): ?string
    {
        return $this->reset_token;
    }

    public function setResetToken(?string $reset_token): static
    {
        $this->reset_token = $reset_token;
        return $this;
    }

    public function getRoles(): array
    {
        $roles = ['ROLE_USER'];
        if ($this->role) {
            $roles[] = $this->role;
        }
        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        if (in_array('ROLE_ADMIN', $roles)) {
            $this->role = 'ROLE_ADMIN';
        } elseif (count($roles) > 0) {
            $this->role = end($roles);
        } else {
            $this->role = 'ROLE_USER';
        }
        return $this;
    }

    public function getDateJoined(): ?\DateTimeInterface
    {
        return $this->dateJoined;
    }

    public function setDateJoined(?\DateTimeInterface $dateJoined): static
    {
        $this->dateJoined = $dateJoined;
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;
        return $this;
    }

    public function getImageData(): ?string 
    {
        if (is_resource($this->imageData)) {
            return stream_get_contents($this->imageData);
        }
        return $this->imageData;
    }
    
    public function setImageData(?string $imageData): static
    {
        $this->imageData = $imageData;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getTokenExpiry(): ?\DateTimeInterface
    {
        return $this->tokenExpiry;
    }

    public function setTokenExpiry(?\DateTimeInterface $tokenExpiry): static
    {
        $this->tokenExpiry = $tokenExpiry;
        return $this;
    }

    public function getHash()
    {
        return $this->hash;
    }

    public function setHash($hash): static
    {
        $this->hash = $hash;
        return $this;
    }

    public function getParticipatedEvents(): Collection
    {
        return $this->participatedEvents;
    }

    public function addParticipatedEvent(Event $event): static
    {
        if (!$this->participatedEvents->contains($event)) {
            $this->participatedEvents->add($event);
        }
        return $this;
    }

    public function removeParticipatedEvent(Event $event): static
    {
        $this->participatedEvents->removeElement($event);
        return $this;
    }

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
            if ($avi->getUtilisateur() === $this) {
                $avi->setUtilisateur(null);
            }
        }
        return $this;
    }

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
            if ($demandePack->getUtilisateur() === $this) {
                $demandePack->setUtilisateur(null);
            }
        }
        return $this;
    }

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
            if ($notificationsAdmin->getUtilisateur() === $this) {
                $notificationsAdmin->setUtilisateur(null);
            }
        }
        return $this;
    }

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
            if ($pack->getUtilisateur() === $this) {
                $pack->setUtilisateur(null);
            }
        }
        return $this;
    }

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
            if ($panier->getUtilisateur() === $this) {
                $panier->setUtilisateur(null);
            }
        }
        return $this;
    }

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
            if ($personnel->getUtilisateur() === $this) {
                $personnel->setUtilisateur(null);
            }
        }
        return $this;
    }

    public function getCreatedEvents(): Collection
    {
        return $this->createdEvents;
    }

    public function addCreatedEvent(Event $event): static
    {
        if (!$this->createdEvents->contains($event)) {
            $this->createdEvents->add($event);
            $event->setUtilisateur($this);
        }
        return $this;
    }

    public function removeCreatedEvent(Event $event): static
    {
        if ($this->createdEvents->removeElement($event)) {
            if ($event->getUtilisateur() === $this) {
                $event->setUtilisateur(null);
            }
        }
        return $this;
    }
}