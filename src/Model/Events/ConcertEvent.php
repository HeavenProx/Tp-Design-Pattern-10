<?php 

declare(strict_types=1);

namespace EsgiIw\TpDesignPattern\Model\Events;

use EsgiIw\TpDesignPattern\Model\Entity\Event;

class ConcertEvent extends Event
{
    protected int $id;
    protected string $label;
    protected string $description;
    protected \DateTime $date;

    public function setId(int $id): static
    {
        return parent::setId($id);
    }  

    public function setLabel(string $label): static
    {
        return parent::setLabel($label);
    }

    public function setDescription(string $description): static
    {
        return parent::setDescription($description);
    }

    public function setDate(\DateTime $date): static
    {
        return parent::setDate($date);
    }

    public function getDetails(): string {
        return "Concert : {$this->label}, {$this->description}, {$this->date->format('Y-m-d H:i')}";
    }
}