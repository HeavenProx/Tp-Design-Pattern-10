<?php 

use EsgiIw\TpDesignPattern\Model\Entity\Event;
use EsgiIw\TpDesignPattern\Model\Observers\EventNotifier;

require_once 'vendor/autoload.php';

$event = new Event();
$event->setId(1)
      ->setLabel("Conférence")
      ->setDescription("Une conférence sur les design patterns")
      ->setDate(new DateTime('2024-05-10 09:00:00'));


// ------------------------- Avant -------------------------
echo "Avant modification : <br>";
echo "ID : " . $event->getId() . "<br>";
echo "Nom : " . $event->getLabel() . "<br>";
echo "Description : " . $event->getDescription() . "<br>";
echo "Date : " . $event->getDate()->format('Y-m-d H:i:s') . "<br>";

echo "<br>";


// Création de l'observateur
$notifier = new EventNotifier();

$event->attach($notifier);

// Modif
$event->setLabel("Atelier de développement");
$event->setDescription("Un atelier de développement sur les design patterns");


$event->notify();

// ------------------------- Après -------------------------
echo "<br><br>";

echo "Après modification :<br>";
echo "ID : " . $event->getId() . "<br>";
echo "Nom : " . $event->getLabel() . "<br>";
echo "Description : " . $event->getDescription() . "<br>";
echo "Date : " . $event->getDate()->format('Y-m-d H:i:s') . "<br>";

/* 
1. Programme principale :
      - Crée un évènement
      - Création de l'observer EventNotifier

2. EventNotifier :
      - Implémente l'interface SplObserver 
      - Crée la méthode update qui effectuera les changements si ça vient d'un Event

3 Event.php :
      - Crée les méthodes attach et notify 
            - Attach va rentrer l'observer en question dans son tableau d'observateur
            - Notify va interroger tout les observeur et appeler la méthode update 

3.5 Programme principale : $event->attach($notifier);
      - Attache l'observeur à l'event pour que celui ci envoie sa notification quand event est modifié

4. Programme principale :
      - Fait les modif de l'event
      - Appele nootify qui execute la methode update (nous fait un echo changement)
*/

