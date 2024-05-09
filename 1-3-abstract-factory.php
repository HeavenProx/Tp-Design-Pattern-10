<?php

use EsgiIw\TpDesignPattern\Controller\AlertController;
use EsgiIw\TpDesignPattern\Model\Factories\EmailAlertContentFactory;
use EsgiIw\TpDesignPattern\Model\Factories\SmsAlertContentFactory;

require_once 'vendor/autoload.php';

// Créer une instance du contrôleur
$alertController = new AlertController();

// Exemple d'utilisation avec les alertes par e-mail
$emailFactory = new EmailAlertContentFactory();
$alertController->sendValidationAlert($emailFactory);
$alertController->sendRegistrationConfirmationAlert($emailFactory);
$alertController->sendEventReminderAlert($emailFactory);

// Exemple d'utilisation avec les alertes par SMS
$smsFactory = new SmsAlertContentFactory();
$alertController->sendValidationAlert($smsFactory);
$alertController->sendRegistrationConfirmationAlert($smsFactory);
$alertController->sendEventReminderAlert($smsFactory);


/* 
1. Programme principale 

2. Instancie AlertController

3. Instancie EmailAlertContentFactory et SmsAlertContentFactory
    Grâce à AlertController : montre comment devront être utiliser les 3 méthodes en prenant en parametre leur "nature" 
    Montre la focntion qui sera utilisé (ex : sendValidationAlert -> createValidationAlertContent)

4. EmailAlertContentFactory et SmsAlertContentFactory : Reprend les 3 méthodes 
    Chaque méthode appelle la fonction qui s'occupera de faire la "vrai" action (ex : sendValidationAlert -> createValidationAlertContent)

4.5 AlertContentInterface contient/déclare la fonction qu'aura tout les 6 fichiers qui font les actions

5. Les 6 fichiers SmsEventReminderAlertContent, EmailEventReminderAlertContent... : font les "vrai" action 
    return juste ce qu'ils ont fait avec 

5.5 AlertContentInterface implemente les 6 fichiers qui font les actions 
    déclare les différentes fonctions qui sont utilisé dans les 2 factories EmailAlertContentFactory et SmsAlertContentFactory 
    (createValidationAlertContent, createRegistrationConfirmationAlertContent, createEventReminderAlertContent)
*/