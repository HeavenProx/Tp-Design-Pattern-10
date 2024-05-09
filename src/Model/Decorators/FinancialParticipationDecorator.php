<?php

namespace EsgiIw\TpDesignPattern\Model\Decorators;

use EsgiIw\TpDesignPattern\Model\Entity\Event;
use EsgiIw\TpDesignPattern\Model\Decorators\EventDecoratorInterface;

class FinancialParticipationDecorator implements EventDecoratorInterface {
    protected Event $event;
    protected int $price;

    public function __construct(Event $event, int $price) {
        $this->event = $event;
        $this->price = $price;
    }

    public function getEvent(): string {
        return $this->event->getLabel() . " :<br>"
        . $this->event->getDescription() . "<br>Prix d'entrée : " . $this->price . "€<br>";
    }
}
