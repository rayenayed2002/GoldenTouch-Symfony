<?php

namespace App\Entity;

use App\Repository\DetailPaymentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetailPaymentRepository::class)]
#[ORM\Table(name: 'detailpaiment')]
class DetailPayment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Payment::class)]
    #[ORM\JoinColumn(name: 'idPaiment', referencedColumnName: 'id', nullable: false)]
    private Payment $payment;

    #[ORM\ManyToOne(targetEntity: Event::class)]
    #[ORM\JoinColumn(name: 'idEvent', referencedColumnName: 'id', nullable: false)]
    private Event $event;

    #[ORM\Column(type: 'float', name: 'price')]
    private float $price;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPayment(): Payment // Remove "?"
    {
        return $this->payment;
    }
    
    public function setPayment(Payment $payment): self // Remove "?"
    {
        $this->payment = $payment;
        return $this;
    }
    

    public function getEvent(): Event // Remove "?"
    {
        return $this->event;
    }
    
    public function setEvent(Event $event): self // Remove "?"
    {
        $this->event = $event;
        return $this;
    }
    

    public function getPrice(): float // Remove "?"
    {
        return $this->price;
    }
    
    public function setPrice(float $price): self // Remove "?"
    {
        $this->price = $price;
        return $this;
    }
}