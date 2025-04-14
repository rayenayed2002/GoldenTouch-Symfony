<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
#[ORM\Table(name: 'avis')]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id')]
    private ?int $id = null;

    #[ORM\Column(name: 'id_utilisateur', nullable: true)]
    private ?int $idUtilisateur = null;

    #[ORM\Column(name: 'id_pack', nullable: true)]
    private ?int $idPack = null;

    #[ORM\Column(name: 'note', type: Types::INTEGER, nullable: false)]
    #[Assert\NotBlank(message: 'Please select a rating')]
    #[Assert\Range(
        min: 1,
        max: 5,
        notInRangeMessage: 'Rating must be between 1 and 5'
    )]
    private ?int $note = null;

    #[ORM\Column(name: 'commentaire', type: Types::TEXT, nullable: false)]
    #[Assert\NotBlank(message: 'Please write a comment before submitting your review.')]
    #[Assert\Length(
        min: 5,
        max: 1000,
        minMessage: 'Your comment must be at least {{ limit }} characters',
        maxMessage: 'Your comment cannot be longer than {{ limit }} characters'
    )]
    private ?string $commentaire = null;

    #[ORM\Column(name: 'date_creation', type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name: 'sentiment', type: Types::STRING, length: 255)]
    private string $sentiment = 'neutral';

    #[ORM\ManyToOne(targetEntity: Pack::class)]
    #[ORM\JoinColumn(name: 'id_pack', referencedColumnName: 'id')]
    private ?Pack $pack = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class)]
    #[ORM\JoinColumn(name: 'id_utilisateur', referencedColumnName: 'id')]
    private ?Utilisateur $utilisateur = null;

    public function __construct()
    {
        $this->dateCreation = new \DateTime();
        $this->sentiment = 'neutral';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(?int $idUtilisateur): static
    {
        $this->idUtilisateur = $idUtilisateur;
        return $this;
    }

    public function getIdPack(): ?int
    {
        return $this->idPack;
    }

    public function setIdPack(?int $idPack): static
    {
        $this->idPack = $idPack;
        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): static
    {
        $this->note = $note;
        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): static
    {
        $this->commentaire = $commentaire;
        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    public function getSentiment(): string
    {
        return $this->sentiment;
    }

    public function setSentiment(string $sentiment): static
    {
        $this->sentiment = $sentiment;
        return $this;
    }

    public function getPack(): ?Pack
    {
        return $this->pack;
    }

    public function setPack(?Pack $pack): static
    {
        $this->pack = $pack;
        return $this;
    }

    
    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;
        return $this;
    }
}
