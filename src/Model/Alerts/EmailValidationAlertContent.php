<?php

namespace EsgiIw\TpDesignPattern\Model\Alerts;

class EmailValidationAlertContent implements AlertContentInterface {
    public function getContent() {
        return "Informer l'admin de la validation d'un compte utilisateur (e-mail).<br>";
    }
}
?>
