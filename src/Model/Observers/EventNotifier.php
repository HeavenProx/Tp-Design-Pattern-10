<?php

declare(strict_types=1);

namespace EsgiIw\TpDesignPattern\Model\Observers;

use EsgiIw\TpDesignPattern\Model\Entity\Event;
use SplObserver;
use SplSubject;

class EventNotifier implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        if ($subject instanceof Event) {
            echo "L'événement \"" . $subject->getLabel() . "\" ayant l'ID " . $subject->getId() . " a été modifié.\n";
        }
    }
}