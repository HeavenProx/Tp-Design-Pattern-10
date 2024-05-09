<?php

namespace EsgiIw\TpDesignPattern\Model\Alerts;

class SmsEventReminderAlertContent implements AlertContentInterface {
    public function getContent() {
        return "Rappel d'événement aux inscrits J-1 (SMS).";
    }
}
?>
