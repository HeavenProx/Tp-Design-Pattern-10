<?php

namespace EsgiIw\TpDesignPattern\Model\Events; 

use EsgiIw\TpDesignPattern\Model\Entity\Event;
use EsgiIw\TpDesignPattern\Model\Events\EventFactory;

class SoireeEventFactory extends EventFactory {
    public function createEvent(): Event {
        return new SoireeEvent();
    }
}
