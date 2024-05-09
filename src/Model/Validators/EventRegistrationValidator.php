<?php

namespace EsgiIw\TpDesignPattern\Model\Validators;

abstract class EventRegistrationValidator {
    public function validateRegistration(): void {
        $this->checkEligibility();
        $this->finalValidation();
    }

    protected abstract function checkEligibility(): void;

    protected abstract function finalValidation(): void;
}