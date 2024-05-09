<?php 

use EsgiIw\TpDesignPattern\Model\Builder\SimpleMailerBuilder;

require_once 'vendor/autoload.php';

$mailerBuilder = new SimpleMailerBuilder();
$mailer = $mailerBuilder->addCible('mail@cible.com')
                        ->addCC('mailcc@cible.com')
                        ->addBCC('mailbcc@cible.com')
                        ->setObjet('Problème rencontré !')
                        ->setMessage('Bonjour, je vous contacte pour exempleonsenfoudesaviemdr...')
                        ->create();

$mailer->display();



/*
1. Programme Principale : instancie SimpleMailerBuilder
    Configuration de l'e-mail en utilisant les méthodes du builder

2. SimpleMailerBuilder : au moment de l'initialisation ->  instancie le builder MailerBuilder et ses fonctions pour les utiliser
    Assure que les méthodes de config nécessaires pour construire l'e-mail sont dispo et peuvent être utilisées

2.5 Au moment de la création ("__construct") -> instancie l'objet Mailer
    Toutes les config faites à travers le builder sont appliquées à l'objet Mailer

3. Appelle les fonctions de Mailer 
*/