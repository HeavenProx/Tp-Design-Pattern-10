<?php

namespace EsgiIw\TpDesignPattern\Model\Alerts;

class EmailEventReminderAlertContent implements AlertContentInterface {
    public function getContent() {
        return "Rappel d'événement aux inscrits J-1 (e-mail).<br>";
    }
}
?>
