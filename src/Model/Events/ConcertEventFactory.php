<?php

namespace EsgiIw\TpDesignPattern\Model\Events; 

use EsgiIw\TpDesignPattern\Model\Entity\Event;
use EsgiIw\TpDesignPattern\Model\Events\EventFactory;

class ConcertEventFactory extends EventFactory {
    public function createEvent(): Event {
        return new ConcertEvent();
    }
}
