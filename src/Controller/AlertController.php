<?php

namespace EsgiIw\TpDesignPattern\Controller;

class AlertController {
    public function sendValidationAlert($factory) {
        $content = $factory->createValidationAlertContent();
        echo $content->getContent() . "\n";
    }

    public function sendRegistrationConfirmationAlert($factory) {
        $content = $factory->createRegistrationConfirmationAlertContent();
        echo $content->getContent() . "\n";
    }

    public function sendEventReminderAlert($factory) {
        $content = $factory->createEventReminderAlertContent();
        echo $content->getContent() . "\n";
    }
}
