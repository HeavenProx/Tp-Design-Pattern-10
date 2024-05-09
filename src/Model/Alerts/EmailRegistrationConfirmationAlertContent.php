<?php

namespace EsgiIw\TpDesignPattern\Model\Alerts;

class EmailRegistrationConfirmationAlertContent implements AlertContentInterface {
    public function getContent() {
        return "Confirmer l'inscription à un événement (e-mail).<br>";
    }
}
?>
