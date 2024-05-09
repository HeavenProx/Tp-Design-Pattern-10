<?php

namespace EsgiIw\TpDesignPattern\Model\Alerts;

interface LoginAlertInterface {
    public function sendAlert(string $message): void;
}
