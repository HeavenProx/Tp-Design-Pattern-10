<?php

namespace EsgiIw\TpDesignPattern\Model\Validators;
use EsgiIw\TpDesignPattern\Model\Validators\EventRegistrationValidator;

class MajorValidator extends EventRegistrationValidator {
    protected function checkEligibility(): void {
        echo "Vérification de si vous êtes majeur (18 ans ou plus).<br>";
    }

    protected function finalValidation(): void {
        echo "Validation finale de votre âge : accès autorisé ou non à l'évènement.<br>";
    }
}
