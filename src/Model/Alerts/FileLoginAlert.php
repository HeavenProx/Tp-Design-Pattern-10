<?php

namespace EsgiIw\TpDesignPattern\Model\Alerts;

class FileLoginAlert implements LoginAlertInterface {
    public function sendAlert(string $message): void {
        echo 'Enregistrement dans les logs<br>';
    }
}