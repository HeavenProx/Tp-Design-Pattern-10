<?php

namespace EsgiIw\TpDesignPattern\Model\Alerts;

class EmailLoginAlert implements LoginAlertInterface {
    public function sendAlert(string $message): void {
        echo "Envoie du mail à l'admin <br>";
    }
}