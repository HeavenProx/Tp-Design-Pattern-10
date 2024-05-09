<?php

namespace EsgiIw\TpDesignPattern\Model\Decorators;

use EsgiIw\TpDesignPattern\Model\Entity\Event;
use EsgiIw\TpDesignPattern\Model\Decorators\EventDecoratorInterface;

class AllergyWarningDecorator implements EventDecoratorInterface {
    protected Event $event;
    protected string $food;

    public function __construct(Event $event, string $food) {
        $this->event = $event;
        $this->food = $food;
    }

    public function getEvent(): string {
        return $this->event->getLabel() . " :<br>"
        . $this->event->getDescription() . "<br>Attention au allergie : \"" . $this->food . "\" présent dans la nourriture proposé à l'évènement !<br>";
    }
}
