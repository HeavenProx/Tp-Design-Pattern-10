<?php 

namespace EsgiIw\TpDesignPattern\Model\Validators;
use EsgiIw\TpDesignPattern\Model\Validators\EventRegistrationValidator;

class SportsEventRegistrationValidator extends EventRegistrationValidator {
    protected function checkEligibility(): void {
        echo "Vérification du certificat médical pour l'épreuve sportive.<br>";
    }

    protected function finalValidation(): void {
        echo "Validation finale pour l'épreuve sportive : si votre certification est bon, vous êtes autorisé, sinon c'est ciao.<br>";
    }
}