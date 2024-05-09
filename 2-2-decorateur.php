<?php 

use EsgiIw\TpDesignPattern\Model\Entity\Event;
use EsgiIw\TpDesignPattern\Model\Decorators\IdcardDecorator;
use EsgiIw\TpDesignPattern\Model\Decorators\FinancialParticipationDecorator;
use EsgiIw\TpDesignPattern\Model\Decorators\AllergyWarningDecorator;

require_once 'vendor/autoload.php';

// Création d'un événement de type Concert
$concertEvent = (new Event())
        ->setId(1)
        ->setLabel("Concert d'été")
        ->setDescription("Assistez au concert fêtant l'arrivé de l'été.")
        ->setDate(new \DateTime('2024-04-26 20:00')
);

$soireeEvent = (new Event())
        ->setId(2)
        ->setLabel("Soirée alcool")
        ->setDescription("Viens faire le barathon de la mort !")
        ->setDate(new \DateTime('2024-04-27 18:00')
);

$cinemaEvent = (new Event())
        ->setId(3)
        ->setLabel("Cinema tranquille")
        ->setDescription("Après le barathon, apaise ton esprit en regardant un petit film.")
        ->setDate(new \DateTime('2024-04-28 19:30')
);



$eventWithFinancialPartipationCheck = new FinancialParticipationDecorator($concertEvent, 10);
echo $eventWithFinancialPartipationCheck->getEvent();

echo "<br>";

$eventWithIdcardCheck = new IdcardDecorator($soireeEvent);
echo $eventWithIdcardCheck->getEvent();

echo "<br>";

$eventWithAllergyWarningDecoratorCheck = new AllergyWarningDecorator($cinemaEvent, "arachides");
echo $eventWithAllergyWarningDecoratorCheck->getEvent();



/*
1. Programme principale : création des Events
    Va appeler le décorator et lui passe les parametres dont il a besoin 

2. IdcardDecorator (ou autre Decorator) : est implémenté par EventDecoratorInterface
    Va récupérer les éléments de notre objet (ici Event) et va créer implémenter les fonctions

2.5 EventDecoratorInterface : déclare les fonctions qui seront implémenté

3. Fait un echo en appelant la fonction qui nous donne les infos que l'on à besoin
*/