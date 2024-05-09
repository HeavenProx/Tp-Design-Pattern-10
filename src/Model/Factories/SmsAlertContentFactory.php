<?php

namespace EsgiIw\TpDesignPattern\Model\Factories;

use EsgiIw\TpDesignPattern\Model\Factories\AlertContentFactory;
use EsgiIw\TpDesignPattern\Model\Alerts\SmsValidationAlertContent;
use EsgiIw\TpDesignPattern\Model\Alerts\SmsRegistrationConfirmationAlertContent;
use EsgiIw\TpDesignPattern\Model\Alerts\SmsEventReminderAlertContent;

class SmsAlertContentFactory implements AlertContentFactory {
    public function createValidationAlertContent() {
        return new SmsValidationAlertContent();
    }

    public function createRegistrationConfirmationAlertContent() {
        return new SmsRegistrationConfirmationAlertContent();
    }

    public function createEventReminderAlertContent() {
        return new SmsEventReminderAlertContent();
    }
}
?>
