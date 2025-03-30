<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\PackPersonnelRepository;

#[ORM\Entity(repositoryClass: PackPersonnelRepository::class)]
#[ORM\Table(name: 'pack_personnel')]
class PackPersonnel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $pack_id = null;

    public function getPack_id(): ?int
    {
        return $this->pack_id;
    }

    public function setPack_id(int $pack_id): self
    {
        $this->pack_id = $pack_id;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $personnel_id = null;

    public function getPersonnel_id(): ?int
    {
        return $this->personnel_id;
    }

    public function setPersonnel_id(int $personnel_id): self
    {
        $this->personnel_id = $personnel_id;
        return $this;
    }

    public function getPackId(): ?int
    {
        return $this->pack_id;
    }

    public function getPersonnelId(): ?int
    {
        return $this->personnel_id;
    }

    public function setPersonnelId(int $personnel_id): static
    {
        $this->personnel_id = $personnel_id;

        return $this;
    }

}
