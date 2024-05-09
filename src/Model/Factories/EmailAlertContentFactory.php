<?php

namespace EsgiIw\TpDesignPattern\Model\Factories;

use EsgiIw\TpDesignPattern\Model\Factories\AlertContentFactory;
use EsgiIw\TpDesignPattern\Model\Alerts\EmailValidationAlertContent;
use EsgiIw\TpDesignPattern\Model\Alerts\EmailRegistrationConfirmationAlertContent;
use EsgiIw\TpDesignPattern\Model\Alerts\EmailEventReminderAlertContent;

class EmailAlertContentFactory implements AlertContentFactory {
    public function createValidationAlertContent() {
        return new EmailValidationAlertContent();
    }

    public function createRegistrationConfirmationAlertContent() {
        return new EmailRegistrationConfirmationAlertContent();
    }

    public function createEventReminderAlertContent() {
        return new EmailEventReminderAlertContent();
    }
}
?>
