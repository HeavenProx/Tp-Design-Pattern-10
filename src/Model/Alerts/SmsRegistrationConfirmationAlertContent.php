<?php

namespace EsgiIw\TpDesignPattern\Model\Alerts;

class SmsRegistrationConfirmationAlertContent implements AlertContentInterface {
    public function getContent() {
        return "Confirmer l'inscription à un événement (SMS).<br>";
    }
}
?>
