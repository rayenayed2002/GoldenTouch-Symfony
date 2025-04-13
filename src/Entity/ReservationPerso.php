<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Tattali\CalendarBundle\TattaliCalendarBundle;

use App\Repository\ReservationPersoRepository;

#[ORM\Entity(repositoryClass: ReservationPersoRepository::class)]
#[ORM\Table(name: 'reservation_perso')]
class ReservationPerso
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idR', type: 'integer')]
    private ?int $idR = null;

    public function getIdR(): ?int
    {
        return $this->idR;
    }

    public function setIdR(int $idR): self
    {
        $this->idR = $idR;
        return $this;
    }

    #[ORM\Column(name: 'idP', type: 'integer', nullable: false)]
    private ?int $idP = null;

    public function getIdP(): ?int
    {
        return $this->idP;
    }

    public function setIdP(int $idP): self
    {
        $this->idP = $idP;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Event::class)]
    #[ORM\JoinColumn(name: 'id', referencedColumnName: 'id')]
    private ?Event $event = null;

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;
        return $this;
    }
}
