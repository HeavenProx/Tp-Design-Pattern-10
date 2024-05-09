<?php

namespace EsgiIw\TpDesignPattern\Model\Validators;
use EsgiIw\TpDesignPattern\Model\Validators\EventRegistrationValidator;

class BDEMembersValidator extends EventRegistrationValidator {
    protected function checkEligibility(): void {
        echo "Vérification de l'appartenance au BDE pour les places réservées.<br>";
    }

    protected function finalValidation(): void {
        echo "Validation finale de l'appartenance au BDE : place réservé ou non.<br>";
    }
}
