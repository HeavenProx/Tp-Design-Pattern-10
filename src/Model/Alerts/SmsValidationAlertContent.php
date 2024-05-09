<?php

namespace EsgiIw\TpDesignPattern\Model\Alerts;

class SmsValidationAlertContent implements AlertContentInterface {
    public function getContent() {
        return "Informer l'admin de la validation d'un compte utilisateur (SMS).<br>";
    }
}
?>
