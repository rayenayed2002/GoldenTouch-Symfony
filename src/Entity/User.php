<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', length: 255)]
    private ?int $id = null;

    #[Assert\NotBlank]
    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column(name: 'role', type: 'json')]
    private array $roles = [];
    /**
     * @var string The hashed password
     */
     #[Assert\NotBlank]
    #[ORM\Column]
    private ?string $password = null;

    #[Assert\NotNull]
    #[ORM\Column(length: 255)]
    private ?string $username = null;
    
    #[ORM\Column(name: 'ImageData' ,type: 'string', length: 255, nullable: true)]
    private ?string $photo = null;

    // Add these temporary properties for file handling (not persisted)
    private ?File $photoFile = null;

    #[Assert\NotBlank]
    #[ORM\Column(name: 'prenom', length: 255)]
    private ?string $firstName = null;

    #[Assert\NotBlank]
    #[ORM\Column(name: 'nom', length: 255)]
    private ?string $lastName = null;

    #[ORM\Column(name:'verifier', type: 'boolean')]
    private $isVerified = false;

    public function getPrenom(): ?string
    {
        return $this->firstName;
    }
    
    public function setNom(string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }
    public function getNom(): ?string
    {
        return $this->lastName;
    }
    
    public function setPrenom(string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $qrCode;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $resetToken;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }
    public function getFullName()
    {
        return "{$this->firstName} {$this->lastName}";
    }
    public function getRoleTitle()
    {
        if(in_array("ROLE_ADMIN", $this->roles)) return "Administrateur";
        else return "Utilisateur";
    }
    
    public function getSalt()
    {}

    
    public function getResetToken(): string
    {
        return $this->resetToken;
    }
     
    public function setResetToken(?string $resetToken): void
    {
        $this->resetToken = $resetToken;
    }
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    public function getQrCode(): ?string
    {
        return $this->qrCode;
    }

    public function setQrCode(?string $qrCode): self
    {
        $this->qrCode = $qrCode;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;
        return $this;
    }

    public function getPhotoFile(): ?File
    {
        return $this->photoFile;
    }

    public function setPhotoFile(?File $photoFile): self
    {
        $this->photoFile = $photoFile;
        
        // Only change the photo if a file is actually uploaded
        if (null !== $photoFile) {
            $this->photo = 'temp'; // This triggers Doctrine to consider the entity dirty
        }
        
        return $this;
    }




}