<?php

namespace EsgiIw\TpDesignPattern\Model\Alerts;

class DatabaseLoginAlert implements LoginAlertInterface {
    public function sendAlert(string $message): void {
        echo 'Enregistrement dans la bdd <br>';
    }
}
