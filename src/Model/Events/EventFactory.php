<?php 

namespace EsgiIw\TpDesignPattern\Model\Events;

use EsgiIw\TpDesignPattern\Model\Entity\Event;

abstract class EventFactory {
    abstract public function createEvent(): Event;
}