<?php

use EsgiIw\TpDesignPattern\Model\Validators\SportsEventRegistrationValidator;
use EsgiIw\TpDesignPattern\Model\Validators\BDEMembersValidator;
use EsgiIw\TpDesignPattern\Model\Validators\MajorValidator;

require_once 'vendor/autoload.php';

// Valide ou non l'inscripton à l'évènement sportif
$sportsValidator = new SportsEventRegistrationValidator();
$sportsValidator->validateRegistration();

echo "<br><br>";

// Valide ou non si vous pouvez participer aux évènements +18
$bdeValidator = new MajorValidator();
$bdeValidator->validateRegistration();

echo "<br><br>";

// Valide ou non si vous faite partie du BDE
$bdeValidator = new BDEMembersValidator();
$bdeValidator->validateRegistration();


/* 
1. Programme principale :
    - Instancie un nouveau Validator comme SportsEventRegistrationValidator

2. SportsEventRegistrationValidator (ou les autres validators) :
    - Extend la classe abstraite EventRegistrationValidator
    - Défini réllement les méthodes et leurs actions
2.5 EventRegistrationValidator :
    - Classe abstraite créant les méthode communes au validators

3. Programme principale : 
    - appelle la méthode validateRegistration pour lancer les méthodes 
*/