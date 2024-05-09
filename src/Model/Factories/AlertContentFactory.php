<?php

namespace EsgiIw\TpDesignPattern\Model\Factories;

interface AlertContentFactory {
    public function createValidationAlertContent();
    public function createRegistrationConfirmationAlertContent();
    public function createEventReminderAlertContent();
}
?>
