<?php

namespace EsgiIw\TpDesignPattern\Model\Decorators;

use EsgiIw\TpDesignPattern\Model\Entity\Event;
use EsgiIw\TpDesignPattern\Model\Decorators\EventDecoratorInterface;

class IdcardDecorator implements EventDecoratorInterface {
    protected Event $event;

    public function __construct(Event $event) {
        $this->event = $event;
    }

    public function getEvent(): string {
        return $this->event->getLabel() . " :<br>"
        . $this->event->getDescription() . "<br>Avec vérification de la carte d'identité<br>";
    }
}
