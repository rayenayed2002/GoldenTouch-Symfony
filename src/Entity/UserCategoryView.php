<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\UserCategoryViewRepository;

#[ORM\Entity(repositoryClass: UserCategoryViewRepository::class)]
#[ORM\Table(name: 'user_category_views')]
class UserCategoryView
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

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $user_id = null;

    public function getUser_id(): ?int
    {
        return $this->user_id;
    }

    public function setUser_id(int $user_id): self
    {
        $this->user_id = $user_id;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $category = null;

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): static
    {
        $this->category = $category;

        return $this;
    }

    #[ORM\Column(type: 'datetime', nullable: false)]
    private ?\DateTimeInterface $view_date = null;

    public function getView_date(): ?\DateTimeInterface
    {
        return $this->view_date;
    }

    public function setView_date(\DateTimeInterface $view_date): self
    {
        $this->view_date = $view_date;
        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getViewDate(): ?\DateTimeInterface
    {
        return $this->view_date;
    }

    public function setViewDate(\DateTimeInterface $view_date): static
    {
        $this->view_date = $view_date;

        return $this;
    }

}
